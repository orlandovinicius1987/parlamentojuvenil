<?php

namespace App\Http\Controllers;

use DB;
use App\Services\SocialLogin\SocialUserService;

class SocialAuthController extends Controller
{
    protected $socialUserService;

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

        if (loggedUser()->isSubscribing) {
            return redirect()->route('subscribe.index');
        }

        return $this->redirectToIntended();
    }
}
