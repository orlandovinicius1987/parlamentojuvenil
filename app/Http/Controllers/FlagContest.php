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
        parent::__construct($dataRepository);

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

    public function vote()
    {
        return $this
            ->buildView('flag-contest.vote.index', null, null, true)
            ->with('flags', $this->flagContestRepository->flags()->shuffle())
        ;
    }

    public function select($flag_id)
    {
        loggedUser()->selectedVotingFlagId = $flag_id;

        return redirect()->route('flag-contest.vote.confirm');
    }

    public function confirm()
    {
        $flag = $this->flagContestRepository->findById(loggedUser()->selectedVotingFlagId);

        return $this
            ->buildView('flag-contest.vote.confirm', null, null, true)
            ->with('flag', $flag)
        ;
    }

    public function cast()
    {
        $voted = $this->flagContestRepository->cast(loggedUser()->student, loggedUser()->selectedVotingFlagId);

        logout();

        if (!$voted) {
            return view('2017.messages.show')->with('message', 'ERRO: Seu voto já havia sido registado antes.');
        }

        return view('2017.messages.show')->with('message', 'Parabéns! O seu voto foi registrado.');
    }
}
