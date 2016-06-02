<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Data;
use App\Http\Controllers\Controller as BaseController;

class Api extends BaseController
{
    /**
     * @var Data
     */
    private $dataRepository;

    public function __construct(Data $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }
    
    public function getTimeline($year)
    {
        return $this->dataRepository->getTimeline($year);
    }

    public function getCongressmen($year)
    {
        return $this->dataRepository->getCongressmen($year);
    }
}
