<?php

namespace App\Http\Controllers;

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
}
