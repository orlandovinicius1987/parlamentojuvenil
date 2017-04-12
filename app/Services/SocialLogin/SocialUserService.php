<?php

namespace App\Services\SocialLogin;

use Auth;
use Socialite;
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

        $user->id = sha1(loggedUser()->user->email);

        return $user;
    }

    public function findOrCreate($socialNetwork, $socialNetworkUser)
    {
        return $this->findOrCreateSocialUser($socialNetworkUser, $socialNetwork);
    }

    private function findOrCreateDataForSocialNetworkUser($socialNetwork)
    {
        $socialNetworkUser = $this->makeSocialNetworkUser($socialNetwork);

        list($socialUser, $user, $student) = $this->findOrCreateSocialUserAndStudent($socialNetworkUser);

        return [$socialUser, $user, $student, $socialNetworkUser];
    }

    private function findOrCreateSocialUserAndStudent($socialNetworkUser)
    {
        $socialUser = $this->findOrCreateSocialUser($socialNetworkUser);

        if ($user = $this->findOrCreateUserBySocialUser($socialUser, $socialNetworkUser)) {
            $socialUser->user()->associate($user->id);
        }

        if ($student = $this->findStudentBySocialUser($socialUser)) {
            $socialUser->student()->associate($student->id);
        }

        $socialUser->save();

        return [$socialUser, $user, $student];
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

    private function findSocialNetworkBySlug($slug)
    {
        if (is_null($socialNetwork = SocialNetwork::where('slug', snake_case($slug))->first())) {
            throw new Exception('Social network not found: '.$socialNetwork);
        }

        return $socialNetwork;
    }

    private function findStudentBySocialUser($socialUser)
    {
        return $socialUser->student;
    }

    private function findOrCreateUserBySocialUser($socialUser, $socialNetworkUser)
    {
        if ($user = $socialUser->user) {
            return $user;
        }

        if ($user = $this->usersRepository->findByEmail($socialNetworkUser->getEmail())) {
            return $user;
        }

        return $this->socialUserRepository->createUser($socialNetworkUser);
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

        return $this->getDriver($socialNetwork->slug)->user();
    }

    /**
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login($user)
    {
        return auth()->login($user);
    }

    public function findOrCreateSocialUser($socialNetworkUser)
    {
        if (is_null($user = $this->socialUserRepository->findBySocialNetworkUserId($socialNetworkUser->getId()))){
            $user = $this->socialUserRepository->createSocialUser($socialNetworkUser);
        }

        return $user;
    }

    public function loginSocialUser($student = null)
    {
        if (loggedUser()->mustBeStudent && ! is_null($student) && is_null(loggedUser()->socialUser->student) && is_null(loggedUser()->student)) {
            loggedUser()->student = $student;

            $this->updateLoggedSocialUser(
                $this->findOrCreateUserByStudent(
                    loggedUser()->student->id,
                    loggedUser()->email,
                    loggedUser()->socialNetworkUser
                )
            );
        }

        Auth::login(loggedUser()->user);
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
                $user = $socialUserByStudent[0]->user;
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

    public function makeSocialNetworkUser($socialNetwork)
    {
        return new SocialNetworkUser($this->getSocialUserForDriver($socialNetwork), $socialNetwork);
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
        $socialNetwork = $this->findSocialNetworkBySlug($socialNetwork);

        list($socialUser, $user, $student, $socialNetworkUser) = $this->findOrCreateDataForSocialNetworkUser($socialNetwork);

        $this->storeUserInSession(
            $socialNetwork,
            $socialUser,
            $socialNetworkUser,
            $user->email,
            $student
        );

        $this->loginSocialUser();
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
                    ->setUser($socialUser->user)
                    ->setStudent($socialUser ? $socialUser->student : null)
                    ->setSocialNetworkUser($socialNetworkUser)
                    ->setEmail($email);
    }
}
