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
        session_start();
        $_SESSION['registration'] = $_POST['registration'];
        $_SESSION['birthdate'] = $_POST['birthdate'];
        return $this->getDriver($socialNetwork)->redirect();
    }

    public function beforeRedirect($socialNetwork)
    {
        return view('partials.subscribe-form-register-and-birthdate', ['socialNetwork'=>$socialNetwork]);
    }


       public function socialNetworkCallback($socialNetwork)
    {
        session_start();
        $regBirth = ["registration"=> $_SESSION['registration'] , "birthdate" => $_SESSION['birthdate']];

        if (!$this->socialUserService->find($socialNetwork, $this->getDriver($socialNetwork)->user(), $regBirth)) {
            return redirect()->route('login');
        }
        dd('AQUI tá quase lá');
        return redirect()->intended();
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }
}
