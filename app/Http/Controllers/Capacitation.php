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

class Capacitation extends BaseController
{
	public function index()
	{
		return view('2016.capacitation.index');
	}

	public function content()
	{
		return view('2016.capacitation.content');
	}
}
