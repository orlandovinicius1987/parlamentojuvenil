<?php
/**
 * Created by PhpStorm.
 * User: ffeder
 * Date: 12/12/2016
 * Time: 16:43.
 */

namespace App\Services\SocialLogin;

use App\Repositories\SocialUserRepository;
use App\Repositories\UsersRepository;
use App\SocialNetwork;

class SocialUserService
{
    private $socialUserRepository;

    private $usersRepository;

    public function __construct(SocialUserRepository $socialUserRepository, UsersRepository $usersRepository)
    {
        $this->socialUserRepository = $socialUserRepository;
        $this->usersRepository = $usersRepository;
    }

    //public function find($socialNetwork, $socialUser, $regBirth)

    public function find($socialNetwork, $socialUser)
    {

        $email = $this->getEmail($socialUser, $socialNetwork);   //ok

    //  $user = $this->findOrCreateUser($socialUser, $email, $regBirth);

        $user = $this->findOrCreateUser($socialUser, $email);

        $socialNetwork = $this->getSocialNetwork($socialNetwork);

        $this->findOrCreateUserSocialNetwork($socialNetwork, $socialUser, $user);

        $this->login($user);

        return $user;
    }

    public function addBirthdateRegistration($user, $regBirth)
    {
        $this->usersRepository->addBirthdateRegistration($user, $regBirth);
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

    private function getEmail($user, $socialNetwork)
    {
        return $user->getEmail() ?: sprintf('%s@%s.legislaqui.rj.gov.br', $user->getId(), $socialNetwork);
    }

    public function findOrCreateUser($socialUser, $email)
    {
        if (!$user = $this->socialUserRepository->findBySocialNetworkId($socialUser->id) ){

                $user = $this->socialUserRepository->createUser($email, $socialUser);
                return $user;
        }
        return $user;
    }

    /*
    public function findOrCreateUser($socialUser, $email, $regBirth)
    {
         if (!$user = $this->findByBirthdateAndRegistration($regBirth)) {

              if (!$user = $this->socialUserRepository->findBySocialNetworkId($socialUser->id) ){
                   $user = $this->socialUserRepository->createUser($email, $socialUser, $regBirth);
                   return $user;
              }
        }
        return $user;
    } */

    public function getSocialNetwork($socialNetwork)
    {
        $socialNetwork = SocialNetwork::where('name', $socialNetwork)->first();
        return $socialNetwork;
    }

    public function findOrCreateUserSocialNetwork($socialNetwork, $socialUser, $user)
    {
        dd($socialNetwork);
        if (!$userSocialNetwork = $user->socialNetworks()->where('social_network_id', $socialNetwork->id)->first()) {
             $user->socialNetworks()->save($socialNetwork, ['social_network_user_id' => $socialUser->getId(), 'data' => json_encode($socialUser)]);
        }
    }

    public function findByBirthdateAndRegistration ($regBirth) {
        return $this->usersRepository->findByBirthdateAndRegistration($regBirth['birthdate'],$regBirth['registration']);
    }

}
