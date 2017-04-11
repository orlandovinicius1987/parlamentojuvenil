<?php

namespace App\Services\SocialLogin;

use Auth;
use Socialite;
use Rhumsaa\Uuid\Uuid;
use App\Data\Entities\User;
use League\Flysystem\Exception;
use App\Data\Entities\SocialUser;
use App\Data\Entities\SocialNetwork;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UsersRepository;
use App\Repositories\SocialUserRepository;
use Laravel\Socialite\Two\User as SocialiteUser;

class SocialUserService
{
    private $socialUserRepository;

    private $usersRepository;

    public function __construct(SocialUserRepository $socialUserRepository, UsersRepository $usersRepository)
    {
        $this->socialUserRepository = $socialUserRepository;
        $this->usersRepository = $usersRepository;
    }

    private function createSocialUserForEmail()
    {
        $user = new SocialiteUser();

        $user->email = loggedUser()->user->email;
        $user->id = (string) Uuid::uuid4();

        return $user;
    }

    public function findOrCreate($socialNetwork, $socialNetworkUser)
    {
        $socialNetwork = $this->getSocialNetwork($socialNetwork);

        $socialUser = $this->findOrCreateSocialUser($socialNetwork, $socialNetworkUser);

        return $socialUser;
    }

    /**
     * @param $email
     * @return static
     */
    private function findOrCreateUserByEmail($email)
    {
        if (! is_null($user = User::where('email', $email)->first())) {
            return $user;
        }

        return User::create([
            'email' => $email,
            'password' => Hash::make(str_random(128))
        ]);
    }

    private function getFreshSocialUser($socialUser)
    {
        return SocialUser::where('id', $socialUser->id)->first();
    }

    /**
     * @param $socialNetwork
     * @return mixed
     */
    private function getSocialUserForDriver($socialNetwork)
    {
        if ($socialNetwork == 'email') {
            return $this->createSocialUserForEmail();
        }

        return $this->getDriver($socialNetwork)->user();
    }

    /**
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login($user)
    {
        return auth()->login($user);
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
        if (is_null($model = SocialNetwork::where('slug', snake_case($socialNetwork))->first())) {
            throw new Exception('Social network not found: '.$socialNetwork);
        }

        return $model;
    }

    public function findOrCreateSocialUser($socialNetwork, $socialNetworkUser)
    {
         if(! $socialUser = $this->socialUserRepository->findBySocialNetworkUserId($socialNetworkUser->getId()))
         {
              return $this->socialUserRepository->createSocialUser($socialNetwork, $socialNetworkUser);
         }

        return $socialUser;
    }

    public function loginSocialUser($studentId, $email, $socialNetworkUser)
    {
        $socialUser = $this->findOrCreateUserByStudent(
            $studentId,
            $email,
            $socialNetworkUser
        );

        $socialUser = $this->updateLoggedSocialUser($socialUser);

        Auth::login($socialUser->user);
    }

    public function findOrCreateUserByStudent($studentId, $email, $socialNetworkUser)
    {
        $socialUser = $this->socialUserRepository->findBySocialNetworkUserId($socialNetworkUser->getId());

        if (is_null($socialUser->student)) {
            $socialUser->student_id = $studentId;
        }

        if (is_null($user = $socialUser->user)) {
            $socialUserByStudent = $this->socialUserRepository->findOtherSocialUsersByStudentId($studentId, $socialNetworkUser->getId());

            if ($socialUserByStudent->count() == 0) {
                $user = $this->findOrCreateUserByEmail($email);
            } else {
                $user = $socialUserByStudent->user;
            }

            $socialUser->user_id = $user->id;

            $this->setUserAvatar($user, $socialNetworkUser->getAvatar());
        }

        $socialUser->save();

        $socialUser = $this->getFreshSocialUser($socialUser);

        if (is_null($socialUser->student->email)) {
            $socialUser->student->email = $email;
            $socialUser->student->save();
        }

        return $socialUser;
    }

    public function makeSocialNetworkUser($user)
    {
        return new SocialNetworkUser($user);
    }

    private function setUserAvatar($user, $avatar)
    {
        if (is_null($user->avatar)) {
            $user->avatar = $avatar;

            $user->save();
        }
    }

    private function updateLoggedSocialUser($socialUser)
    {
        loggedUser()->socialUser = $socialUser;

        loggedUser()->user = $socialUser->user;

        return $socialUser;
    }

    /**
     * @param $socialNetwork
     */
    public function socialNetworkLogin($socialNetwork)
    {
        if (! $this->isSocialNetworkIsLoggedIn($socialNetwork)) {
            $socialNetworkUser = $this->makeSocialNetworkUser($this->getSocialUserForDriver($socialNetwork));

            $socialUser = $this->findOrCreate($socialNetwork, $socialNetworkUser);

            $this->storeUserInSession(
                $socialNetwork,
                $socialUser,
                $socialNetworkUser,
                $this->getEmail($socialNetworkUser, $socialNetwork)
            );
        }
    }

    private function isSocialNetworkIsLoggedIn($socialNetwork)
    {
        if (loggedUser()->logged()) {
            return false;
        }

        return loggedUser()->socialNetwork == $socialNetwork;
    }

    private function getEmail($socialNetworkUser, $socialNetwork)
    {
        return $socialNetworkUser->getEmail() ?: sprintf('%s@%s.parlamentojuvenil.rj.gov.br', $socialNetworkUser->getId(), $socialNetwork);
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
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
