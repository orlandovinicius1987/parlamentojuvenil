<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Vote extends BaseController
{
    public function index($year = null, $force = false)
	{
        return $this->buildView('vote.index', $year, null, true);
	}

    public function confirm($year = null, $force = false)
    {
        return $this->buildView('vote.confirm', $year, null, true);
    }

    public function voted($year = null, $force = false)
    {
        return $this->buildView('vote.voted', $year, null, true);
    }

    public function error($year = null, $force = false)
    {
        return $this->buildView('vote.error', $year, null, true);
    }
}
