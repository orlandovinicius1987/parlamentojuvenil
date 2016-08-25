<?php

namespace App\Http\Controllers;

use \DB;
use Event;
use Input;
use Storage;
use Session;
use Illuminate\Http\Request;
use App\Data\Entities\Training as TrainingModel;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;

class Training extends BaseController
{
    private function getLoggedUser()
    {
        return Session::get('logged-user');
    }

    public function index(TrainingRepository $repository)
	{
        if ($user = $this->getLoggedUser()) {
            return $this->renderTraining($user, $repository);
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

    private function renderTraining($user, $repository)
    {
        $training = $repository->addTrainingData($user, TrainingModel::byYear(2016));

        return view('2016.training.content')
            ->with('loggedUser', $user)
            ->with('videos', $training->where('type', 'video'))
            ->with('documents', $training->where('type', 'document'));
    }

    public function video()
    {
        return view('2016.training.video');
    }

    public function watch($year, $item, TrainingRepository $repository)
    {
        $repository->markAsWatched($year, $item);

        $training = $repository->addTrainingData($user = $this->getLoggedUser(), TrainingModel::byYear(2016));

        $training = $training->where('id' , $item)->first();

        $view = $training['type'] == 'video' ? '2016.training.video' : '2016.training.download';

        return view($view)
            ->with('loggedUser', $this->getLoggedUser())
            ->with('lesson', $training);
    }
}
