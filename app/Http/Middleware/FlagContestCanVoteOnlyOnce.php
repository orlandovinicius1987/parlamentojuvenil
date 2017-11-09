<?php

namespace App\Http\Middleware;

use App\Data\Repositories\StudentAlreadyVotedOnFlag;
use Closure;
use App\Data\Repositories\StudentAlreadyVoted;

class FlagContestCanVoteOnlyOnce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws StudentAlreadyVotedOnFlag
     */
    public function handle($request, Closure $next)
    {
        if (loggedUser()->student->votedInCurrentFlagContest()) {
            throw new StudentAlreadyVotedOnFlag(loggedUser()->student->registration);
        }

        return $next($request);
    }
}
