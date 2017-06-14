<?php

namespace App\Http\Controllers;

use DB;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Http\Controllers\Controller as BaseController;

class Api extends BaseController
{
    /**
     * @var Data
     */
    private $dataRepository;
    /**
     * @var Subscriptions
     */
    private $subscriptionsRepository;

    public function __construct(Data $dataRepository, Subscriptions $subscriptionsRepository)
    {
        $this->dataRepository = $dataRepository;
        $this->subscriptionsRepository = $subscriptionsRepository;
    }
    
    public function getTimeline($year)
    {
        return $this->dataRepository->getTimeline($year);
    }

    public function getCongressmen($year)
    {
        return $this->dataRepository->getCongressmen($year);
    }

    public function getElected($year = null)
    {
        $this->subscriptionsRepository->markAllElected();

        return $this->subscriptionsRepository->getElectedOn1and2($year);
    }

    public function getVoteStatistics()
    {
        $byTime = DB::select(DB::raw(<<<SQL
            SELECT
                to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as date_time,
                (select count(*) from votes) as total_votes,
                count(*) time_votes,
                round((count(*)  * 100.00) / (select count(*) from votes), 2) as percentage
            FROM votes
            WHERE votes.year = 2017
            GROUP BY date_time
            ORDER BY date_time desc
                ;
SQL
        ));

        $byCity = DB::select(DB::raw(<<<SQL
            SELECT
                students.city,            
                (select count(*) from votes) as total_votes,
                count(*) city_votes,
                round((count(*)  * 100.00) / (select count(*) from votes), 2) as percentage
            FROM votes
            JOIN subscriptions on subscriptions.id = votes.subscription_id
            JOIN students on subscriptions.student_id = students.id
            WHERE votes.year = 2017
            GROUP BY students.city
            ORDER BY students.city
            ;
SQL
        ));

        return [
            'by_time' => $byTime,
            'by_city' => $byCity,
        ];
    }
}
