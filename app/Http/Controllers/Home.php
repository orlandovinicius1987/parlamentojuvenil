<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Home extends BaseController
{
	public function force()
	{
		return $this->index(null, true);
	}

    public function index($year = null, $force = false)
	{
        $year = $year ?: config('app.year');

        return $this->buildView('home.index', $year, null, true);
	}
}
