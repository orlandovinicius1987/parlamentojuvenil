<?php

namespace App\Services\SocialLogin;

use App\Data\Entities\SocialNetwork;

class SocialNetworkUser
{
    public $user;

    public $social_network_slug;

    public $social_network_name;

    public $social_network;

    public function __construct($user, $socialNetwork)
    {
        $this->user = $user;

        $this->populateSocialNetwork($socialNetwork);
    }

    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], (array) $parameters);
        }

        return call_user_func_array([$this->user, $method], (array) $parameters);
    }

    /**
     * @param $socialNetwork
     */
    private function populateSocialNetwork($socialNetwork)
    {
        $this->social_network_slug = snake_case($socialNetwork->slug);

        $this->social_network_name = $socialNetwork->name;

        $this->social_network = SocialNetwork::where('slug', $this->social_network_slug)->first();
    }

    public function serialize()
    {
        return json_encode($this->user);
    }
}
