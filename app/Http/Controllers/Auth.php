<?php

namespace App\Http\Controllers;

use Auth as IlluminateAuth;
use App\Http\Controllers\Controller as BaseController;

class Auth extends BaseController
{
    public function index($year = null)
    {
        return $this->buildView($this->getYear($year).'.auth.index');
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
