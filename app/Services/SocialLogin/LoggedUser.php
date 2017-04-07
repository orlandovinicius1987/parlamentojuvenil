<?php

namespace App\Services\SocialLogin;

class LoggedUser
{
    protected $user;

    protected $email;

    protected $socialUser;

    protected $socialNetwork;

    protected $socialNetworkUser;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }

    /**
     * @return mixed
     */
    public function getSocialNetworkUser()
    {
        return $this->socialNetworkUser;
    }

    /**
     * @return mixed
     */
    public function getSocialUser()
    {
        return $this->socialUser;
    }

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return is_null($this->socialUser)
                ? null
                : $this->socialUser->student;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param mixed $socialNetwork
     */
    public function setSocialNetwork($socialNetwork)
    {
        $this->socialNetwork = $socialNetwork;

        return $this;
    }

    /**
     * @param mixed $socialNetworkUser
     */
    public function setSocialNetworkUser($socialNetworkUser)
    {
        $this->socialNetworkUser = $socialNetworkUser;

        return $this;
    }

    /**
     * @param mixed $socialUser
     */
    public function setSocialUser($socialUser)
    {
        $this->socialUser = $socialUser;

        return $this;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @param $key
     */
    public function __get($key)
    {
        return $this->{'get'.studly($key)}();
    }
}
