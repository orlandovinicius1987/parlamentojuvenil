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
        info('student login');
        if (! loggedUser()->userIsLogged()) {
            info('1');
            return redirect()->route('auth.login.email.student');
        }
        info('2');

        if (! loggedUser()->studentIsLogged() && ! loggedUser()->voterIsLogged()) {
            info('3');
            return redirect()->route('student.identify');
        }
        info('4');
        return $next($request);
    }
}
