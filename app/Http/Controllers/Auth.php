<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class Auth extends BaseController
{
    public function index($year = null)
    {
        return $this->buildView('auth.index', $year);
    }

    public function logout()
    {
        logout();

        return redirect()->route('home');
    }
}
