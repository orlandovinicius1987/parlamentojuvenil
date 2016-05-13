<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Home extends BaseController
{
	public function force()
	{
		return $this->index(true);
	}

    public function index($force = false)
	{
		return $this->buildView('home', $force);
	}

    public function page($page)
    {
        return $this->buildView('2016.pages.'.$page);
    }

	public function breno()
	{
		return $this->buildView('breno');
	}
}
