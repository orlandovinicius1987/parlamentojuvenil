<?php

namespace App\Http\Controllers;

use App\Services\SocialLogin\SocialUserService;
use Illuminate\Support\Facades\Input;
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

    public function afterRedirect()
    {
        $user = session('user');

        $regBirth = ["registration"=> Input::get('registration') , "birthdate" => Input::get('birthdate')];

        $this->socialUserService->addBirthdateRegistration($user, $regBirth);

        return redirect()->intended();
    }


       public function socialNetworkCallback($socialNetwork)
    {
        $socialUser = $this->getDriver($socialNetwork)->user();

        $user = $this->socialUserService->find($socialNetwork, $socialUser);

        session(['user' => $user]);

        return view('partials.subscribe-form-register-and-birthdate');
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }
}
