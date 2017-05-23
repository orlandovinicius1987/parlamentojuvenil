<?php

namespace App\Data\Repositories;

use Hash;
use App\Data\Entities\User;
use App\Data\Entities\SocialUser;
use App\Exceptions\Authentication as AuthenticationException;

class Users extends Repository
{
    private function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function register($credentials)
    {
        if ($this->findUserByEmail($credentials['email'])) {
            throw new AuthenticationException('Este e-mail já está registrado.');
        }

        return User::create([
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);
    }

    public function findStudentByUser($user)
    {
        $socialUser = SocialUser::where('user_id', $user->id)->first();

        return $socialUser
            ? $socialUser->student
            : null;
    }
}
