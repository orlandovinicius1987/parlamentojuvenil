<?php

namespace App\Services\SocialLogin;

class LoggedUser
{
    protected $user;

    protected $socialUser;

    protected $socialNetwork;

    protected $socialNetworkUser;

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
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param $key
     */
    public function __get($key)
    {
        return $this->{'get'.studly($key)}();
    }
}
