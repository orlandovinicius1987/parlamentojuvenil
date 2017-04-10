<?php

namespace App\Http\Middleware;

use Closure;

class StudentLogin
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
        if (! loggedUser()->logged()) {
            return redirect()->route('auth.login.email.student');
        }

        return $next($request);
    }
}
