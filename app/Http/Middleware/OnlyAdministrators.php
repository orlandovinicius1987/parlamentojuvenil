<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class OnlyAdministrators
{
    public function handle($request, Closure $next)
    {
        if (! Auth::user()->isAdministrator()) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
