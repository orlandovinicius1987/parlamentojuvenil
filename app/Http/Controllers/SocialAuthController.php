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
        if (loggedUser()->logged()) {
            return false;
        }

        return loggedUser()->socialNetwork == $socialNetwork;
    }

    public function login($socialNetwork)
    {
        return $this->getDriver($socialNetwork)->redirect();
    }

    public function socialNetworkCallback($socialNetwork)
    {
        $this->socialUserService->socialNetworkLogin($socialNetwork);

        return view('2017.partials.subscribe-form-register-and-birthdate');
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }

    /**
     * @param $socialNetwork
     */
    public function socialNetworkLogin($socialNetwork)
    {
        if (! $this->isSocialNetworkIsLoggedIn($socialNetwork)) {
            $socialNetworkUser = $this->socialUserService->makeSocialNetworkUser($this->getDriver($socialNetwork)->user());

            $socialUser = $this->socialUserService->findOrCreate($socialNetwork, $socialNetworkUser);

            $this->storeUserInSession(
                $socialNetwork,
                $socialUser,
                $socialNetworkUser,
                $this->getEmail($socialNetworkUser, $socialNetwork)
            );
        }
    }

    private function getEmail($socialNetworkUser, $socialNetwork)
    {
        return $socialNetworkUser->getEmail() ?: sprintf('%s@%s.parlamentojuvenil.rj.gov.br', $socialNetworkUser->getId(), $socialNetwork);
    }

    /**
     * @param $socialNetwork
     * @param $socialUser
     * @param $socialNetworkUser
     */
    private function storeUserInSession($socialNetwork, $socialUser, $socialNetworkUser, $email)
    {
        loggedUser()->setSocialNetwork($socialNetwork)
                    ->setSocialUser($socialUser)
                    ->setSocialNetworkUser($socialNetworkUser)
                    ->setEmail($email);
    }
}
