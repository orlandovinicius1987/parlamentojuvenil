<?php

namespace App\Data\Repositories;

use Exception;

class StudentAlreadyVotedOnFlag extends Exception
{
    private $registration;

    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return string
     */
    public function getRegistration(): string
    {
        return $this->registration;
    }
}
