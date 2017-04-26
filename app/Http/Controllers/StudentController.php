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

    /**
     * @return array
     */
    private function getUserData()
    {
        return [
            "registration" => Input::get('registration'),
            "birthdate" => string_to_date(Input::get('birthdate')),
        ];
    }

    private function getUserEmail($user)
    {
        return strpos($user->email, config('app.domain')) == false
                ? $user->email
                : ''
        ;
    }

    public function login(LoginSeeducUser $request)
    {
        $userData = $this->getUserData();

        if (! $student = $this->findStudentBySeeduc($userData, loggedUser()->user)) {
            return redirect()->back()->withErrors(Subscriptions::MATRICULA_E_DATA_DE_NASCIMENTO);
        }

        $this->socialUserService->loginSocialUser($student);

        return redirect()->intended();
    }

    public function findStudentBySeeduc($data, $user = null)
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
                'email' => $user ? $this->getUserEmail($user) : null,
            ]);
        }

        return $student;
    }

    public function identify()
    {
        return view('2017.partials.subscribe-form-register-and-birthdate');
    }

    public function wrongAge()
    {
        return view('2017.students.wrong-age');
    }
}
