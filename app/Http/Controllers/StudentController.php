<?php

namespace App\Http\Controllers;

use App\Data\Entities\Seeduc;
use App\Data\Entities\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

    public function login()
    {
        $userData = ["registration"=> Input::get('registration') , "birthdate" => Input::get('birthdate')];

        if (! $student = $this->findStudentBySeeduc($userData)) {
            return redirect()->back()->withErrors('Inscrição não encontrada.');
        }

        $socialUser = $this->socialUserService->findOrCreateUserByStudent(
            $student->id,
            session('socialUserId'),
            session('email'),
            session('socialUserPlatform')
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
