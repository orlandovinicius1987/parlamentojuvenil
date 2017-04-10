<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\SocialLogin\LoggedUser;

class StudentLogin
{
    private $loggedUser;

    /**
     * Create a new filter instance.
     *
     * @param LoggedUser $loggedUser
     */
    public function __construct(LoggedUser $loggedUser)
    {
        $this->loggedUser = $loggedUser;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! $this->loggedUser->getStudent()) {
            return redirect()->route('auth.login.email.student');
        }

        return $next($request);
    }
}
