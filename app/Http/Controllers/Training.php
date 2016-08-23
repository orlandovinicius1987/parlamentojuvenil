<?php

namespace App\Http\Controllers;

use \DB;
use Event;
use Input;
use Storage;
use App\Http\Controllers\Controller as BaseController;

class Training extends BaseController
{
	public function index()
	{
		return view('2016.training.index');
	}

	public function content()
	{
		return view('2016.training.content');
	}
}
