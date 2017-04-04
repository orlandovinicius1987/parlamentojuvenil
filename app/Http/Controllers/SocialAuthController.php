<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Services\SocialLogin\SocialUserService;
use Illuminate\Support\Facades\Input;
use Socialite;
use DB;

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
        $socialUserId = session('socialUserId');
        $email = session('email');
        $socialUserPlatform = session('socialUserPlatform');

        $regBirth = ["registration"=> Input::get('registration') , "birthdate" => Input::get('birthdate')];

        $student = $this->findStudentByRegBirthSEDUC($regBirth);   // MOCK FUNCTION

        $this->socialUserService->findOrCreateUserByStudent($student->id, $socialUserId, $email, $socialUserPlatform);

        return redirect()->intended();
    }

       public function socialNetworkCallback($socialNetwork)
    {
        $socialUserPlatform = $this->getDriver($socialNetwork)->user();

        $socialUser = $this->socialUserService->findOrCreate($socialNetwork, $socialUserPlatform);

        session(['socialUserId' => $socialUser->id, 'socialUserPlatform' => $socialUserPlatform]);

        return view('2017.partials.subscribe-form-register-and-birthdate');
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }

    // MOCK FUNCTION
    public function findStudentByRegBirthSEDUC($regBirth)
    {
        if(true)   // SIMULANDO UM REGISTRO ENCONTRADO
        {
          return $socialNetwork = DB::table('students')
            ->where(['registration' => '201630200590637', 'birthdate' => '23/08/2000'])
            ->first();
        }

        return dd('Você é estudante?');

    }

}
