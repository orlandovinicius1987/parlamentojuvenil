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
    private $SocialUser;

    public function find($id)
    {
        $this->SocialUser = new SocialUser();

        return $this->SocialUser->find($id);
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function createUser($email, $socialUser, $regBirth)
    {
        $userModel = new User();

        if ($socialUser->getName()) {
            $userModel->name = $socialUser->getName();
        } elseif ($socialUser->getNickname()) {
            $userModel->name = $socialUser->getNickname();
        } else {
            $userModel->name = 'sem nome';
        }

        $userModel->email = $email;
        $userModel->password = 'Empty';
        $userModel->registration = $regBirth['registration'];
        $userModel->birthdate = $regBirth['birthdate'];
        $userModel->save();

        return $userModel;
    }
}
