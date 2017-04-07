<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class EmailAuth extends BaseController
{
    public function index($year = null)
    {
        return $this->buildView($this->getYear($year).'.auth.email.index');
    }
}
