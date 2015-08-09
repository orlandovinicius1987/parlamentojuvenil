<?php

namespace App\Http\Controllers;

use App\Data\Entities\Subscription;
use \DB;
use App\Data\Entities\City;
use App\Http\Controllers\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;

class Subscriptions extends BaseController
{
	public function byState()
	{
		return City::leftJoin('subscriptions', 'cities.name', '=', 'subscriptions.city')
			->join('states', 'states.id', '=', 'cities.state_id')
			->where('states.code', 'RJ')
			->distinct()
			->select('cities.name as city', DB::raw('(select count(*) from subscriptions where subscriptions.city = cities.name) as subscriptionCount'))
			->orderBy('cities.name')
			->get()
		;
	}

	public function download()
	{
		return $this->exportSubscriptionsToExcel();
	}

	private function exportSubscriptionsToExcel()
	{
		return

			Excel::create('InscricoesParlamentoJuvenilIX-2015', function($excel)
			{
				$excel->sheet('Inscricoes', function($sheet)
				{
					$products = Subscription::all();

					$sheet->fromArray($products);
				});
			})->download('xls');
	}
}
