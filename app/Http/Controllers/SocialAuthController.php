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
        $socialUser = session('SocialUser');
        $socialNetwork = session('SocialNetwork');
        $regBirth = ["registration"=> Input::get('registration') , "birthdate" => Input::get('birthdate')];

        if (!$this->socialUserService->find($socialNetwork, $socialUser, $regBirth)) {
            return redirect()->route('login');
        }

        return redirect()->intended();
    }


       public function socialNetworkCallback($socialNetwork)
    {
        $socialUser = $this->getDriver($socialNetwork)->user();
        session(['SocialUser' => $socialUser , 'SocialNetwork' => $socialNetwork]);
        return view('partials.subscribe-form-register-and-birthdate');
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }
}
