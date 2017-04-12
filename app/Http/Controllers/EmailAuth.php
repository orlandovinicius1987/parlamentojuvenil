<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegister;
use Auth as IlluminateAuth;
use App\Services\SocialLogin\SocialUserService;
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

    private function loginUser($user)
    {
        loggedUser()->user = $user;

        $this->socialUserService->socialNetworkLogin(loggedUser()->socialNetwork = 'email');

        return $this->redirectToIntended();
    }

    public function post(UserRegister $userRegister)
    {
        if (IlluminateAuth::attempt(request()->only(['email', 'password']))) {
            return $this->loginUser(IlluminateAuth::user());
        }

        return redirect()
                ->back()
                ->withInput()
                ->withErrors('Usuário ou senha inválido.');
    }

    private function redirectToIntended()
    {
        if (loggedUser()->mustBeStudent) {
            return redirect()->route('subscribe.index');
        }

        return redirect()->intended();
    }

    public function register(UserRegister $userRegister)
    {
        if ($user = $this->usersRepository->register(request()->only(['email', 'password']))) {
            return $this->loginUser($user);
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
