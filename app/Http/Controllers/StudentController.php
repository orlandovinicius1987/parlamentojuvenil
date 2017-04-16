<?php

namespace App\Http\Controllers;

use App\Data\Entities\Seeduc;
use App\Data\Entities\Student;
use App\Http\Requests\LoginSeeducUser;
use Illuminate\Support\Facades\Input;
use App\Services\SocialLogin\SocialUserService;

class StudentController extends Controller
{
    private $socialUserService;

    public function __construct(SocialUserService $socialUserService)
    {
        $this->socialUserService = $socialUserService;
    }

    private function findSeeducStudentByRegistrationAndBirth($data)
    {
        return Seeduc::where('matricula', $data['registration'])->where('nascimento', $data['birthdate'])->first();
    }

    private function findStudentByRegistrationAndBirth($data)
    {
        return Student::where('registration', $data['registration'])->where('birthdate', $data['birthdate'])->first();
    }

    public function login(LoginSeeducUser $seeducUser)
    {
        $userData = [
            "registration"=> Input::get('registration') ,
            "birthdate" => Input::get('birthdate')
        ];

        if (! $student = $this->findStudentBySeeduc($userData)) {
            return redirect()->back()->withErrors(Subscriptions::MATRICULA_E_DATA_DE_NASCIMENTO);
        }

        $this->socialUserService->loginSocialUser($student);

        return redirect()->intended();
    }

    public function findStudentBySeeduc($data)
    {
        if (is_null($student = $this->findStudentByRegistrationAndBirth($data))) {
            if (is_null($seeduc = $this->findSeeducStudentByRegistrationAndBirth($data))) {
                return null;
            }

            $student = Student::createStudent([
                'registration' => $seeduc->matricula,
                'birthdate' => $seeduc->nascimento,
                'name' => $seeduc->nome,
                'school' => $seeduc->escola,
                'city' => $seeduc->municipio,
            ]);
        }

        return $student;
    }

    public function identify()
    {
        return view('2017.partials.subscribe-form-register-and-birthdate');
    }
}
