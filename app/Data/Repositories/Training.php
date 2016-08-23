<?php

namespace App\Data\Repositories;

use Session;
use App\Data\Entities\Subscription;

class Training
{
    public function login($registration, $birthdate)
    {
        $person = Subscription::where('registration', $registration)
                    ->where('birthdate', $birthdate)
                    ->first();

        Session::put('logged-user', $person);

        return $person;
    }
}
