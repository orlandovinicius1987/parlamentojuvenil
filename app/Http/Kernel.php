<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'only-administrators' => \App\Http\Middleware\OnlyAdministrators::class,
        'subscribing' => \App\Http\Middleware\Subscribing::class,
        'voting' => \App\Http\Middleware\Voting::class,
        'cannot-re-subscribe' => \App\Http\Middleware\CannotResubscribe::class,
        'student-login' => \App\Http\Middleware\StudentLogin::class,
        'check-student-age' => \App\Http\Middleware\CheckStudentAge::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'cors' => \App\Http\Middleware\Cors::class,
        'flag-contest-voting' => \App\Http\Middleware\FlagContestVoting::class,
        'flag-contest-subscribing' => \App\Http\Middleware\FlagContestSubscribing::class,
        'flag-contest-cannot-re-subscribe' => \App\Http\Middleware\FlagContestCannotResubscribe::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
    ];
}
