<?php

namespace App\Services\SocialLogin;

class SocialNetworkUser
{
    /**
     * @var array
     */
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], (array) $parameters);
        }

        return call_user_func_array([$this->user, $method], (array) $parameters);
    }
}
