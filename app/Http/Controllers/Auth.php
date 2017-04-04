<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Auth extends BaseController
{
    public function index($year = null)
    {
        $year = $year ?: config('app.year');

        return $this->buildView($year.'.auth.index');
    }
}
