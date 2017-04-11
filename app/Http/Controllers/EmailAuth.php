<?php

namespace App\Http\Controllers;

use App\Services\SocialLogin\SocialUserService;
use Auth as IlluminateAuth;
use App\Services\SocialLogin\EmailAuthProvider;
use App\Data\Repositories\Data as DataRepository;
use App\Data\Repositories\Users as UsersRepository;
use App\Http\Controllers\Controller as BaseController;

class EmailAuth extends BaseController
{
    /**
     * @var Users
     */
    private $usersRepository;
    /**
     * @var SocialUserService
     */
    private $socialUserService;

    public function __construct(UsersRepository $usersRepository, DataRepository $dataRepository, SocialUserService $socialUserService)
    {
        parent::__construct($dataRepository);

        $this->usersRepository = $usersRepository;

        $this->socialUserService = $socialUserService;
    }

    public function index($year = null)
    {
        return $this->buildView($this->getYear($year).'.auth.email.index');
    }

    public function post()
    {
        if (IlluminateAuth::attempt(request()->only(['email', 'password']))) {
            loggedUser()->setUser(IlluminateAuth::user());

            $this->socialUserService->socialNetworkLogin(loggedUser()->socialNetwork = 'email');

            return redirect()->intended();
        }

        return redirect()
                ->back()
                ->withInput()
                ->withErrors('Usuário ou senha inválido.');
    }

    public function register()
    {
        if ($user = $this->usersRepository->register(request()->only(['email', 'password']))) {
            loggedUser()->setUser($user);

            return redirect()->route('home');
        }

        return redirect()
            ->back()
            ->withInput()
            ->withErrors('Erro ao registrar usuário.');
    }

    public function student()
    {
        if (is_null($this->usersRepository->findStudentByUser(loggedUser()->user))) {
            $socialNetworkProvider = new EmailAuthProvider();

            $this->socialUserService->socialNetworkLogin($socialNetworkProvider);

            return view('2017.partials.subscribe-form-register-and-birthdate');
        }

        return redirect()->intended();
    }
}
