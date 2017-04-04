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

    public function findOrCreate($socialNetwork, $socialUserPlatform)
    {
        $email = $this->getEmail($socialUserPlatform, $socialNetwork);
        session(['email' => $email]);

        $socialNetwork = $this->getSocialNetwork($socialNetwork);

        $socialUser = $this->findOrCreateSocialUser($socialNetwork, $socialUserPlatform);

        return $socialUser;

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
        $socialNetwork = SocialNetwork::where('name', $socialNetwork)->first();
        return $socialNetwork;
    }

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
        if($this->socialUserRepository->findBySocialNetworkUserId($socialUserPlatform->user_id))
        {
          // não finalizado    Se o usuário logar com a mesma rede social não é necessário usar nenhum dos métodos abaixo
        }
        elseif ($userId = $this->socialUserRepository->findByStudentId($studentId))
        {
           $this->socialUserRepository->updateSocialUser($userId->id, $studentId, $socialUserId);
        }
        else
        {
           $this->socialUserRepository->updateSocialUserAndCreateUser($studentId, $socialUserId, $email, $socialUserPlatform);
        }

    }

}
