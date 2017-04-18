<?php

namespace App\Http\Controllers;

use Auth as IlluminateAuth;
use App\Http\Controllers\Controller as BaseController;

class Auth extends BaseController
{
    public function index($year = null)
    {
        return $this->buildView('auth.index', $year);
    }

    public function logout()
    {
        session()->forget('loggedUser');

        if (IlluminateAuth::user()) {
            IlluminateAuth::logout();
        }

        return redirect()->route('home');
    }
}
