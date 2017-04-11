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

        return $this->buildView($year.'.home.index', null, true);
	}

    public function page($page)
    {
        return $this->buildView('2016-felipe.pages.'.$page);
    }
}
