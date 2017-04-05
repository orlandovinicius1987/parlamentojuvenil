<?php

namespace App\Http\Controllers;

use App\Services\SocialLogin\SocialUserService;
use Socialite;
use DB;

class SocialAuthController extends Controller
{
    private $socialUserService;

    public function __construct(SocialUserService $socialUserService)
    {
        $this->socialUserService = $socialUserService;
    }

    private function isSocialNetworkIsLoggedIn($socialNetwork)
    {
        if (is_null($user = session('user'))) {
            return false;
        }

        return $user['socialNetwork'] == $socialNetwork;
    }

    public function login($socialNetwork)
    {
        return $this->getDriver($socialNetwork)->redirect();
    }

    public function socialNetworkCallback($socialNetwork)
    {
        $this->socialNetworkLogin($socialNetwork);

        return view('2017.partials.subscribe-form-register-and-birthdate');
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }

    /**
     * @param $socialNetwork
     */
    private function socialNetworkLogin($socialNetwork)
    {
        if (!$this->isSocialNetworkIsLoggedIn($socialNetwork)) {
            $socialNetworkUser = $this->getDriver($socialNetwork)->user();

            $socialUser = $this->socialUserService->findOrCreate($socialNetwork, $socialNetworkUser);

            $this->storeUserInSession($socialNetwork, $socialUser, $socialNetworkUser);
        }
    }

    /**
     * @param $socialNetwork
     * @param $socialUser
     * @param $socialNetworkUser
     */
    private function storeUserInSession($socialNetwork, $socialUser, $socialNetworkUser)
    {
        session(
            [
                'user' => collect([
                                      'socialUser'        => $socialUser,
                                      'socialNetwork'     => $socialNetwork,
                                      'socialNetworkUser' => $socialNetworkUser,
                                  ])
            ]
        );
    }

}
