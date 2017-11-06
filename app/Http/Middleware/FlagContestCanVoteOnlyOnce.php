<?php

namespace App\Http\Middleware;

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
     * @throws StudentAlreadyVoted
     */
    public function handle($request, Closure $next)
    {
        if (loggedUser()->student->votedInCurrentFlagContest()) {
            throw new StudentAlreadyVoted();
        }

        return $next($request);
    }
}
