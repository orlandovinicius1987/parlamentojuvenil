<?php

namespace App\Http\Controllers;

use \DB;
use Event;
use Input;
use Storage;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;
use App\Data\Entities\Training as TrainingModel;

class Training extends BaseController
{
    private function getLoggedUser()
    {
        return Session::get('logged-user');
    }

    public function index()
	{
        if ($user = $this->getLoggedUser()) {
            return $this->renderTraining($user);
        }

		return view('2016.training.index');
	}

    public function login(Request $request, TrainingRepository $repository)
    {
        if (! $user = $this->getLoggedUser())
        {
            if (! $user = $repository->login($request->get('matricula'), $request->get('nascimento')))
            {
                Session::flash('error', 'Aluno não encontrado.');

                return redirect()->back()->withInput();
            }
        }

        return $this->renderTraining($user);
    }

    private function renderTraining($user)
    {
        $training = TrainingModel::byYear(2016);

        return view('2016.training.content')
            ->with('loggedUser', $user)
            ->with('training', $training);
    }

    public function video()
    {
        return view('2016.training.video');
    }
}
