<?php

namespace App\Services\SocialLogin;

class LoggedUser
{
    public $user;

    public $student;

    public $socialUser;

    public $socialNetwork;

    public $socialNetworkUser;

    /**
     * @param mixed $socialNetwork
     */
    public function setSocialNetwork($socialNetwork)
    {
        $this->socialNetwork = $socialNetwork;
    }

    /**
     * @param mixed $socialNetworkUser
     */
    public function setSocialNetworkUser($socialNetworkUser)
    {
        $this->socialNetworkUser = $socialNetworkUser;
    }

    /**
     * @param mixed $socialUser
     */
    public function setSocialUser($socialUser)
    {
        $this->socialUser = $socialUser;

        $this->setStudent($socialUser->student);
    }

    /**
     * @param mixed $student
     */
    public function setStudent($student)
    {
        $this->student = $student;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
