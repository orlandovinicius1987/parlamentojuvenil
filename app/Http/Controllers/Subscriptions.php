<?php

namespace App\Http\Controllers;

use \DB;
use Event;
use Input;
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
	public function byState()
	{
		return City::leftJoin('subscriptions', 'cities.name', '=', 'subscriptions.city')
			->join('states', 'states.id', '=', 'cities.state_id')
			->where('states.code', 'RJ')
			->distinct()
			->select(
				'cities.name as city',
				DB::raw('(select count(*) from subscriptions where subscriptions.ignored = false and subscriptions.city = cities.name) as subscriptionCount'),
				DB::raw('(select max(created_at) from subscriptions where subscriptions.ignored = false and subscriptions.city = cities.name) as lastSubscription'),
				DB::raw('(select count(distinct school) from subscriptions where subscriptions.ignored = false and subscriptions.city = cities.name) as schoolCount'),
				DB::raw('(select count(*) from subscriptions where subscriptions.ignored != false and subscriptions.city = cities.name) as cancelledCount'),
				DB::raw('(select count(*) from cities where cities.state_id = 19 and cities.name in (select city from subscriptions where subscriptions.ignored = false)) as citiesIn'),
				DB::raw('(select count(*) from cities where cities.state_id = 19 and cities.name not in (select city from subscriptions where subscriptions.ignored = false)) as citiesOut')
			)
			->orderBy('cities.name')
			->get()
		;
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

		return

			Excel::create('InscricoesParlamentoJuvenil-'.$date, function($excel) use ($subscriptions)
			{
				$excel->sheet('Inscricoes', function($sheet) use ($subscriptions)
				{
					$sheet->fromArray($subscriptions);
				});
			})->download('xls');
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

	public function ignore($id)
	{
		if ( ! $subscription = Subscription::find($id))
		{
			return view('admin.message')->with('message', 'Inscrição não encontrada.');
		}

		$subscription->ignored = ! $subscription->ignored;
		$subscription->save();

		event(new SubscriptionWasUpdated($subscription));

		return redirect()->back();
	}

    public function index()
    {
        return $this->buildView('2016.subscriptions.index');
    }

    public function store(Subscribe $request)
    {
        $this->dataRepository->createSubscription($request);

        return $this->buildView('2016.subscriptions.success');
    }

    public function start(Request $request)
    {
        Input::flash();

        return redirect()->route('subscriptions.index');
    }
}
