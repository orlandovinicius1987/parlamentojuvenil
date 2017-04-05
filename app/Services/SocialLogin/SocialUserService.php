<?php

namespace App\Services\SocialLogin;

use Auth;
use App\User;
use App\SocialNetwork;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UsersRepository;
use App\Repositories\SocialUserRepository;

class SocialUserService
{
    private $socialUserRepository;

    private $usersRepository;

    public function __construct(SocialUserRepository $socialUserRepository, UsersRepository $usersRepository)
    {
        $this->socialUserRepository = $socialUserRepository;
        $this->usersRepository = $usersRepository;
    }

    public function findOrCreate($socialNetwork, $socialUserPlatform)
    {
        $email = $this->getEmail($socialUserPlatform, $socialNetwork);

        session(['email' => $email]);

        $socialNetwork = $this->getSocialNetwork($socialNetwork);

        $socialUser = $this->findOrCreateSocialUser($socialNetwork, $socialUserPlatform);

        return $socialUser;
    }

    /**
     * @param $email
     */
    private function findOrCreateUserByEmail($email)
    {
        if (! is_null($user = User::where('email', $email)->first())) {
            return $user;
        }

        return User::create([
            'email' => $email,
            'password' => Hash::make(str_random(128)),
        ]);
    }

    /**
     * @param $socialUser
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login($user)
    {
        return auth()->login($user);
    }

    private function getEmail($socialUserPlatform, $socialNetwork)
    {
        return $socialUserPlatform->getEmail() ?: sprintf('%s@%s.legislaqui.rj.gov.br', $socialUserPlatform->getId(), $socialNetwork);
    }

    public function findOrCreateUser($socialUser, $email)
    {
        if (!$user = $this->socialUserRepository->findBySocialNetworkId($socialUser->id) ){

                $user = $this->socialUserRepository->createUser($email, $socialUser);
                return $user;
        }
        return $user;
    }

    public function getSocialNetwork($socialNetwork)
    {
        if (is_null($model = SocialNetwork::where('name', $socialNetwork)->first())) {
            throw new Exception('Social network not found: '.$socialNetwork);
        }

        return $model;
    }

    public function findOrCreateSocialUser($socialNetwork, $socialUserPlatform)
    {
         if(! $socialUser = $this->socialUserRepository->findBySocialNetworkUserId($socialUserPlatform->id))
         {
              return $this->socialUserRepository->createSocialUser($socialNetwork, $socialUserPlatform);
         }

        return $socialUser;
    }

    public function loginSocialUser($studentId, $socialUserId, $email, $socialUserPlatform)
    {
        $socialUser = $this->findOrCreateUserByStudent(
            $studentId,
            $socialUserId,
            $email,
            $socialUserPlatform
        );

        $socialUser->user->socialUser = $socialUser;

        Auth::login($socialUser->user);
    }

    public function findOrCreateUserByStudent($studentId, $socialUserId, $email, $socialUserPlatform)
    {
        $socialUser = $this->socialUserRepository->findBySocialNetworkUserId($socialUserPlatform->getId());

        if (is_null($socialUser->student)) {
            $socialUser->student_id = $studentId;
        }

        if (is_null($socialUser->user)) {
            $socialUserByStudent = $this->socialUserRepository->findOtherSocialUsersByStudentId($studentId, $socialUserPlatform->getId());

            if ($socialUserByStudent->count() == 0) {
                $user = $this->findOrCreateUserByEmail($email);
            } else {
                $user = $socialUserByStudent->user;
            }

            $socialUser->user_id = $user->id;
        }

        $socialUser->save();

        return $socialUser;
    }

}
