<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Http\Controllers\Controller as BaseController;

class Vote extends BaseController
{
    /**
     * @var Subscriptions
     */
    protected $subscriptionsRepository;

    public function __construct(Data $dataRepository, Subscriptions $subscriptionsRepository)
    {
        $this->dataRepository = $dataRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    public function index($year = null)
	{
	    $this->subscriptionsRepository->checkIfUserCanVote();

        $this->subscriptionsRepository->markAllElected();

        $this->subscriptionsRepository->candidatesForSchool(loggedUser()->student->school);

        $candidates = $this->subscriptionsRepository->getCandidates($year);

        return $this
                ->buildView('vote.index', $year, null, true)
                ->with('candidates', $candidates)
        ;
	}

    public function confirm($subscription_id)
    {
        $candidate = $this->subscriptionsRepository->getCandidateBySubscription($subscription_id);

        return $this->buildView('vote.confirm', config('app.year'), null, true)
                ->with('candidate', $candidate)
        ;
    }

    public function error($year = null, $force = false)
    {
        return $this->buildView('vote.error', $year, null, true);
    }

    public function voteIn($subscription_id)
    {
        $this->subscriptionsRepository->voteIn($subscription_id);

        return $this->buildView('vote.voted');
    }
}
