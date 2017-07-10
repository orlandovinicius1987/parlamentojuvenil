<?php

namespace App\Http\Middleware;

use Closure;

class FlagContestVoting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! config('app.flag.contest.election.enabled')) {
            return redirect()->home();
        }

        loggedUser()->isVotingOnFlagContest = true;

        return $next($request);
    }
}
