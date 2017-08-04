<?php

namespace App\Http\Controllers;

use Auth;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Data\Repositories\FlagContest as FlagContestRepository;
use App\Http\Controllers\Controller as BaseController;

class FlagContest extends BaseController
{
    /**
     * @var Subscriptions
     */
    protected $flagContestRepository;

    public function __construct(Data $dataRepository, FlagContestRepository $flagContestRepository)
    {
        $this->dataRepository = $dataRepository;

        $this->flagContestRepository = $flagContestRepository;
    }

    public function subscribe()
    {
        if (! is_null(loggedUser()->student) && $this->flagContestRepository->isStudentSubscribed(loggedUser()->student->id)) {
            return view('2017.messages.show')->with('message', "Você já está inscrito. Por favor entre em contato com o Parlamento Juvenil, caso tenha alguma dúvida.");
        }

        return $this->buildView('flag-contest.subscribe');
    }

    public function post()
    {
        $model = $this->flagContestRepository->subscribe(request()->all());

        if (is_null($model->confirmed_at)) {
            return view('2017.messages.show')->with('message', "Uma mensagem de confirmação da inscrição foi enviada para o endereço de e-mail '{$model->email}', por favor abra sua caixa postal clique no link de confirmação.");
        }

        return view('2017.messages.show')->with('message', 'A sua inscrição já foi confirmada. Por favor entre em contato com o Parlamento Juvenil, caso tenha alguma dúvida.');
    }

    public function confirmEmail($confirmation_key, $email)
    {
        $model = $this->flagContestRepository->confirm($confirmation_key, $email);

        if (! is_null($model->confirmed_at)) {
            return view('2017.messages.show')->with(
                'message',
                "Sua inscrição foi confirmada! Seu número de inscrição é <strong>{$model->id}</strong>."
            );
        }
    }
}
