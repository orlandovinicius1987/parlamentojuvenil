<?php

namespace App\Repositories;

use App\Data\Entities\User;
use App\Data\Entities\SocialUser;

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

    public function findBySocialNetworkUserId($socialNetworkUserId)
    {
        return SocialUser::where('social_network_user_id', $socialNetworkUserId)->first();
    }

    public function findOtherSocialUsersByStudentId($studentId, $social_network_user_id)
    {
        return SocialUser::where('student_id', $studentId)
                ->where('social_network_user_id', '!=', $social_network_user_id)
                ->whereNotNull('user_id')
                ->get();
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

    public function createSocialUser($socialNetwork, $socialNetworkUser)
    {
        return SocialUser::create([
            'social_network_id' => $socialNetwork->id,
            'social_network_user_id' => $socialNetworkUser->getId(),
            'data' => $socialNetworkUser->serialize(),
        ]);
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
