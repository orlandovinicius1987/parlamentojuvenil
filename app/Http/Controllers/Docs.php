<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Docs extends BaseController
{
    public function terms($year = null)
	{
        return $this->buildView($this->makeViewName($year, 'docs.terms'), null, true);
	}

    public function privacy($year = null)
    {
        return $this->buildView($this->makeViewName($year, 'docs.privacy'), null, true);
    }
}
