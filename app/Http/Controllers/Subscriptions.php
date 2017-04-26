<?php

namespace App\Http\Controllers;

use \DB;
use Event;
use Input;
use Storage;
use Carbon\Carbon;
use App\Data\Entities\City;
use Illuminate\Http\Request;
use App\Data\Entities\School;
use App\Http\Requests\Subscribe;
use App\Data\Entities\Subscription;
use Maatwebsite\Excel\Facades\Excel;
use App\Events\SubscriptionWasUpdated;
use App\Http\Controllers\Controller as BaseController;

class Subscriptions extends BaseController
{
    const MATRICULA_E_DATA_DE_NASCIMENTO = 'Não foi encontrado nenhum aluno com esta matrícula e data de nascimento';

    public function byState()
	{
        $subscriptions = City::select(
                            'students.school as school_name',
                            'cities.id as city_id',
                            'cities.name as city_name',
                            'cities.state_id',
                            'subscriptions.created_at as subscriptions_created_at',
                            'subscriptions.ignored as subscription_ignored',
                            DB::raw('(select count(*)  from subscriptions su1  join students st1 on st1.id = su1.student_id join cities ci1 on ci1.name = st1.city  where ci1.name = cities.name and subscriptions.ignored = false) as subscriptions_count')
                        )
                        ->leftJoin('students', 'cities.name', '=', 'students.city')
                        ->leftJoin('states', 'states.id', '=', 'cities.state_id')
                        ->leftJoin('subscriptions', 'subscriptions.student_id', '=', 'students.id')
                        ->where('states.code', 'RJ')
                        ->orderBy('cities.name')
                        ->get();

        $cities = City::select(
                            'cities.id as city_id',
                            'cities.name as city_name',
                            DB::raw('(select count(*)  from subscriptions su1  join students st1 on st1.id = su1.student_id join cities ci2 on ci2.name = st1.city  where ci2.name = cities.name and su1.ignored = false) as subscriptions_count'),
                            DB::raw('(select count(distinct(st1.school)) from subscriptions su1 join students st1 on st1.id = su1.student_id join cities ci2 on ci2.name = st1.city where ci2.name = cities.name and su1.ignored = false) as schools_count'),
                            DB::raw('(select max(su1.created_at) from subscriptions su1  join students st1 on st1.id = su1.student_id join cities ci2 on ci2.name = st1.city  where ci2.name = cities.name) as last_subscription')
                        )
                        ->where('cities.name', '<>', 'FACEBOOK')
                        ->where('cities.name', '<>', 'ACR')
                        ->where('cities.name', '<>', 'BRENOT')
                        ->groupBy(['cities.id', 'cities.name'])
                        ->orderBy('cities.name')
                        ->get();

        $subscriptions = $subscriptions->reject(function ($item) {
            return $item['city_name'] == 'FACEBOOK' || $item['city_name'] == 'ACR' || $item['city_name'] == 'BRENOT';
        });

        $citiesIn = $cities->reject(function($item) {
            return $item['subscriptions_count'] == 0;
        });

        $citiesOut = $cities->reject(function($item) {
            return $item['subscriptions_count'] > 0;
        });

        return [
            'subscriptionCount' => $subscriptions->count(),
            'citiesCount' => $subscriptions->unique('city_name')->count(),
            'citiesInCount' => $citiesIn->unique('city_name')->count(),
            'citiesOutCount' => $citiesOut->unique('city_name')->count(),
            'lastSubscriptionDate' => $subscriptions->max('subscriptions_created_at'),
            'schoolCount' => $subscriptions->unique('school_name')->pluck('school_name')->count(),
            'cancelledSubscriptionsCount' => $subscriptions->where('subscription_ignored', true)->count(),
            'validSubscriptionsCount' => $subscriptions->where('subscription_ignored', false)->count(),

            'subscriptions' => $subscriptions,
            'cities' => $cities,
        ];
	}

    public function byStudent()
    {
        return Subscription::where('subscriptions.ignored', false)
                ->with('city')
                ->with('school');
    }

    public function bySchool()
    {
        return School::join('subscriptions', 'schools.name', '=', 'subscriptions.school')
                     ->where('subscriptions.ignored', false)
                     ->select(
                         'schools.*',
                         DB::raw('(select count(*) from subscriptions where subscriptions.ignored = false and schools.name = subscriptions.school) as subscriptionCount')
                     )
                     ->get();
    }

	public function download()
	{
		return $this->exportSubscriptionsToExcel();
	}

	private function exportSubscriptionsToExcel()
	{
		$subscriptions = $this->allSubscriptions();

        $date = Carbon::now()->format('Y-m-d-h-m-s');

//        return $this->exportToExcel($date, $subscriptions);
        return $this->exportToCsv($date, $subscriptions);
    }

	private function allSubscriptions()
	{
		$subscriptions = array_map(function($subscription) {
			return array(
				'nome_completo' => $subscription['name'],
				'apelido' => $subscription['social_name'],
				'municipio' => $subscription['city'],
				'escola' => $subscription['school'],
				'matricula' => $subscription['registration'],
				'genero' => $subscription['gender'],
				'identidade_genero' => $subscription['gender2'],
				'data_nascimento' => $subscription['birthdate'],
				'cpf' => $subscription['cpf'],
				'identidade' => $subscription['id_number'],
				'orgao_emissor' => $subscription['id_issuer'],
				'email' => $subscription['email'],
				'telefone_residencial' => $subscription['phone_home'],
				'telefone_celular' => $subscription['phone_cellular'],
				'cep' => $subscription['zip_code'],
				'endereco' => $subscription['address'],
				'complemento' => $subscription['address_complement'],
				'bairro' => $subscription['address_neighborhood'],
				'cidade' => $subscription['address_city'],
				'facebook' => $subscription['facebook'],
				'ignorado' => $subscription['ignored'] ? 'Sim' : 'Não',
				'registrado_em' => $subscription['created_at'],
			);
		}, Subscription::orderBy('id')->get()->toArray());

		return $subscriptions;
	}

    private function exportToCsv($date, $subscriptions)
    {
        $fileName = 'InscricoesParlamentoJuvenil-' . $date . '.csv';

        $lines = $subscriptions[0];

        $lines = '"' . implode(array_keys($lines), '";"') . '"' . "\n";

        foreach ($subscriptions as $subscription)
        {
            $lines .= '"' . implode($subscription, '";"') . '"' . "\n";
        }

        Storage::disk('local')->put($fileName, utf8_decode($lines));

        $path = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

        return response()->download("$path/$fileName")->deleteFileAfterSend(true);
    }

    /**
     * @param $date
     * @param $subscriptions
     * @return mixed
     */
    private function exportToExcel($date, $subscriptions)
    {
        return

            Excel::create('InscricoesParlamentoJuvenil-' . $date, function ($excel) use ($subscriptions) {
                $excel->sheet('Inscricoes', function ($sheet) use ($subscriptions) {
                    $sheet->fromArray($subscriptions);
                });
            })->download('xls')
            ;
    }

    public function ignore($id)
	{
		if ( ! $subscription = Subscription::find($id))
		{
			return view('admin.message')->with('message', self::MATRICULA_E_DATA_DE_NASCIMENTO);
		}

		$subscription->ignored = ! $subscription->ignored;
		$subscription->save();

		event(new SubscriptionWasUpdated($subscription));

		return redirect()->back();
	}

    public function index($year = null)
    {
        $year = $year ?: config('app.year');

        return $this->buildView('subscriptions.index', $year);
    }

    public function store(Subscribe $request)
    {
        $subscription = $this->dataRepository->createSubscription($request);

        $this->updateLoggedStudent($subscription->student);

        return $this->buildView('subscriptions.success');
    }

    public function start(Request $request)
    {
        Input::flash();

        return redirect()->route('subscriptions.index');
    }

    public function edit($id)
    {
        if ( ! $subscription = Subscription::find($id))
        {
            return view('admin.message')->with('message', static::MATRICULA_E_DATA_DE_NASCIMENTO);
        }

        return view('admin.subscriptions.edit')
                ->with('subscription', $subscription)
                ->with('spreadsheet', $this->dataRepository->viewBuilder->spreadsheet)
                ->with('schools', $this->dataRepository->viewBuilder->getSchoolsForCity($subscription->city))
                ->with('cities', $this->dataRepository->viewBuilder->getCities())
        ;
    }

    public function update($id)
    {
        $subscription = Subscription::find($id);

        $subscription->update(Input::only($subscription->getFillable()));

        $subscription->save();

        return redirect()->route('admin.city', ['city' => $subscription->city]);
    }

    private function updateLoggedStudent($student)
    {
        loggedUser()->student = $student;
    }
}
