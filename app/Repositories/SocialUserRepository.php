<?php
/**
 * Created by PhpStorm.
 * User: falbernaz
 * Date: 27/06/2016
 * Time: 10:49.
 */

namespace App\Repositories;

use App\SocialUser;
use App\User;
use Ramsey\Uuid\Uuid;

class SocialUserRepository
{
    private $socialUser;

    public function findBySocialNetworkId($socialUserId)
    {
        $this->socialUser = new SocialUser();
        if ($socialUser = $this->socialUser->find($socialUserId)){
            $user = $socialUser->user;
            return $user;
        }
    }

    public function find($id)
    {
       $socialUser = SocialUser::where('id', $id)->first();
        return $socialUser;
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function findBySocialNetworkUserId($id)
    {
        return SocialUser::where('social_network_user_id', $id)->first();
    }

    public function findByStudentId($id)
    {
        return SocialUser::where('student_id',$id)->first();
    }

    public function updateSocialUser($userId, $studentId, $socialUserId)
    {
      $socialUser = $this->find($socialUserId);
      $socialUser->user_id = $userId;
      $socialUser->student_id = $studentId;
      $socialUser->save();
    }

    public function updateSocialUserAndCreateUser($studentId, $socialUserId, $email, $socialUserPlatform)
    {
      $socialUser = $this->find($socialUserId);
      $socialUser->student_id = $studentId;
      $user = $this->createUser($email, $socialUserPlatform);
      $socialUser->user_id = $user->id;
      $socialUser->save();
    }

    public function createSocialUser($socialNetwork, $socialUserPlatform)
    {
        $socialUser = new SocialUser();
        $socialUser->social_network_id = $socialNetwork->id;
        $socialUser->social_network_user_id = $socialUserPlatform->getId();
        $socialUser->data = json_encode($socialUserPlatform);
        $socialUser->save();
        return $socialUser;
    }

    public function createUser($email, $socialUserPlatform)  //, $socialUser)  //, $regBirth)
    {
        $userModel = new User();

        if ($socialUserPlatform->getName()) {
            $userModel->name = $socialUserPlatform->getName();
        } elseif ($socialUserPlatform->getNickname()) {
            $userModel->name = $socialUserPlatform->getNickname();
        } else {
            $userModel->name = 'sem nome';
        }

        $userModel->email = $email;
        $userModel->password = 'Empty';
  //    $userModel->registration = $regBirth['registration'];
  //    $userModel->birthdate = $regBirth['birthdate'];
        $userModel->save();
        return $userModel;
    }

}
