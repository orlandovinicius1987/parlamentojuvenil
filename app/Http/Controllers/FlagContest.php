<?php

namespace App\Http\Controllers;

use Auth;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Data\Repositories\FlagContest as FlagContestRepository;
use App\Http\Controllers\Controller as BaseController;

class FlagContest extends BaseController
{
    /**
     * @var Subscriptions
     */
    protected $flagContestRepository;

    public function __construct(Data $dataRepository, FlagContestRepository $flagContestRepository)
    {
        $this->dataRepository = $dataRepository;

        $this->flagContestRepository = $flagContestRepository;
    }

    public function subscribe()
    {
        return $this->buildView('flag-contest.subscribe');
    }
}
