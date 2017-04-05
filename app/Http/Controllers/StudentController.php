<?php

namespace App\Http\Controllers;

use App\Data\Entities\Seeduc;
use App\Data\Entities\Student;
use Illuminate\Support\Facades\Input;
use App\Services\SocialLogin\SocialUserService;
use League\Flysystem\Exception;

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
     * @return mixed
     */
    private function getEmailFromSession()
    {
        return session('email');
    }

    /**
     * @return mixed
     */
    private function getSocialNetworkUserFromSession()
    {
        return session('user')['socialNetworkUser'];
    }

    public function login()
    {
        $userData = ["registration"=> Input::get('registration') , "birthdate" => Input::get('birthdate')];

        if (! $student = $this->findStudentBySeeduc($userData)) {
            return redirect()->back()->withErrors('Inscrição não encontrada.');
        }

        $this->socialUserService->loginSocialUser(
            $student->id,
            $this->getSocialNetworkUserFromSession()->getId(),
            $this->getEmailFromSession(),
            $this->getSocialNetworkUserFromSession()
        );

        return redirect()->intended();
    }

    public function findStudentBySeeduc($data)
    {
        if (is_null($student = $this->findStudentByRegistrationAndBirth($data))) {
            if (is_null($seeduc = $this->findSeeducStudentByRegistrationAndBirth($data))) {
                return null;
            }

            $student = Student::create([
                'registration' => $seeduc->matricula,
                'birthdate' => $seeduc->nascimento,
            ]);
        }

        return $student;
    }
}
