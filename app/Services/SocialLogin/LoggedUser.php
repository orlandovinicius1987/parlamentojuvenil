<?php

namespace App\Services\SocialLogin;

use PhpSpec\Exception\Fracture\MethodNotFoundException;

class LoggedUser
{
    const SESSION_VAR_NAME = 'loggedUser';

    /**
     * @param $key
     * @return null
     */
    private function get($key)
    {
        $key = snake_case($key);

        $value = $this->loadSessionVar();

        $value = isset($value[$key])
                ? $value[$key]
                : null;

        return $value;
    }

    private function loadSessionVar()
    {
        return session(self::SESSION_VAR_NAME);
    }

    private function set($key, $data)
    {
        $loggedUser = $this->loadSessionVar();

        $loggedUser[snake_case($key)] = $data;

        $this->updateSession($loggedUser);

        return $this;
    }

    /**
     * @param $key
     * @return null
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($name, $value) {
        return $this->set($name, $value);
    }

    public function __call($name, $arguments) {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }

        if (! starts_with($name, 'set')) {
            throw new MethodNotFoundException("Method $name does not exists.");
        }

        $arguments = array_merge((array) substr($name, 3), $arguments);

        return call_user_func_array([$this, 'set'], $arguments);
    }

    private function updateSession($loggedUser)
    {
        session()->put(self::SESSION_VAR_NAME, $loggedUser);
    }

    public function logged()
    {
        return $this->get('user') || $this->get('socialUser');
    }
}
