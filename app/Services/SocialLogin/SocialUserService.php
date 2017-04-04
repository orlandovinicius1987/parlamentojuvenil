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

    public function findOrCreate($socialNetwork, $socialUserPlatform)
    {
        $email = $this->getEmail($socialUserPlatform, $socialNetwork);
        session(['email' => $email]);

    //  $user = $this->findOrCreateUser($socialUser, $email, $regBirth);

        $socialNetwork = $this->getSocialNetwork($socialNetwork);

        $socialUser = $this->findOrCreateSocialUser($socialNetwork, $socialUserPlatform);

        return $socialUser;

    //    $user = $this->findOrCreateUser($socialUser, $email);

    //   $socialNetwork = $this->getSocialNetwork($socialNetwork);

     // $this->findOrCreateUserSocialNetwork($socialNetwork, $socialUser, $user);

    //    $this->login($user);

    //    return $user;
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

 /*   public function findOrCreateUserSocialNetwork($socialNetwork, $socialUser, $user)
    {
        if (!$userSocialNetwork = $user->socialNetworks()->where('social_network_id', $socialNetwork->id)->first()) {
             $user->socialNetworks()->save($socialNetwork, ['social_network_user_id' => $socialUser->getId(), 'data' => json_encode($socialUser)]);
        }
    }*/

    public function findOrCreateSocialUser($socialNetwork, $socialUserPlatform)
    {
         if(! $socialUser = $this->socialUserRepository->findBySocialNetworkUserId($socialUserPlatform->id))
         {
              return $this->socialUserRepository->createSocialUser($socialNetwork, $socialUserPlatform);
         }

        return $socialUser;
    }

    public function findOrCreateUserByStudent($studentId, $socialUserId, $email, $socialUserPlatform)
    {

        if($userId = $this->socialUserRepository->findByStudentId($studentId))
        {
           $this->socialUserRepository->updateSocialUser($userId->id, $studentId, $socialUserId);
        }
        else
        {
           $this->socialUserRepository->updateSocialUserAndCreateUser($studentId, $socialUserId, $email, $socialUserPlatform);
        }

    }

  /*  public function*/

    /*public function findByBirthdateAndRegistration ($regBirth) {
        return $this->usersRepository->findByBirthdateAndRegistration($regBirth['birthdate'],$regBirth['registration']);
    }*/

}
