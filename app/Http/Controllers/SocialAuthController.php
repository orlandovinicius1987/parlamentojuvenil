<?php

namespace App\Http\Controllers;

use App\Services\SocialLogin\SocialUserService;
use Socialite;

class SocialAuthController extends Controller
{
    private $socialUserService;

    public function __construct(SocialUserService $socialUserService)
    {
        $this->socialUserService = $socialUserService;
    }

    public function redirect($socialNetwork)
    {
        return $this->getDriver($socialNetwork)->redirect();
    }

    public function socialNetworkCallback($socialNetwork)
    {
//        dd($this->getDriver($socialNetwork)->user());

        if (!$this->socialUserService->find($socialNetwork, $this->getDriver($socialNetwork)->user())) {
            return redirect()->route('login');
        }

        return redirect()->intended();
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }
}
