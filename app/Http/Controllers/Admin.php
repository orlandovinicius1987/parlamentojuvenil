<?php

namespace App\Http\Controllers;

use \DB;
use App\Data\Entities\School;
use App\Data\Entities\Subscription;
use App\Http\Controllers\Controller as BaseController;

class Admin extends BaseController
{
	function index()
	{
		return view('admin.index');
	}

	function city($city)
	{
		return view('admin.city')
				->with('city', $city)
				->with('subscriptions', Subscription::where('city', $city)->get())
				->with('schools', School::where('city', 'like', DB::raw("UPPER('".$city."')"))->get())
		;
	}
}
