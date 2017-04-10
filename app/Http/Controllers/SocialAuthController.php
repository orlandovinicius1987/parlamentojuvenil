<?php

namespace App\Http\Controllers;

use App\Services\SocialLogin\SocialUserService;
use DB;

class SocialAuthController extends Controller
{
    private $socialUserService;

    public function __construct(SocialUserService $socialUserService)
    {
        $this->socialUserService = $socialUserService;
    }

    public function login($socialNetwork)
    {
        return $this->socialUserService->getDriver($socialNetwork)->redirect();
    }

    public function socialNetworkCallback($socialNetwork)
    {
        $this->socialUserService->socialNetworkLogin($socialNetwork);

        return view('2017.partials.subscribe-form-register-and-birthdate');
    }
}
