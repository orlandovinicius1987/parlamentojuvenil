<?php

namespace App\Data\Repositories;

class Repository
{
    /**
     * @return mixed
     */
    public function getCurrentYear($year = null)
    {
        return $year ?: config('app.year');
    }

    public function getCurrentRound($round = null)
    {
        return $round ?: config('app.election.round', 1);
    }
}
