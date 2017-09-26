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
    protected $trainingRepository;

    protected $user;

    public function __construct(TrainingRepository $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;

        $this->user = $user = $this->getLoggedUser();
    }

    public function logout()
    {
        Session::forget('logged-user');

        return redirect()->route('training.index', ['year' => $this->getYear()]);
    }

    public function index()
	{
		return view($this->getYear().'.training.index');
	}

    public function content()
    {
        $training = $this->trainingRepository->addTrainingData(loggedUser()->user, TrainingModel::byYear($this->getYear()));

        return view($this->getYear().'.training.content')
            ->with('loggedUser', loggedUser()->user)
            ->with('training', $training);
    }

    public function video()
    {
        return view($this->getYear().'.training.video');
    }

    public function watch($year, $item)
    {
        $this->trainingRepository->markAsWatched($year, $item);

        $training = $this->trainingRepository->findById($item, $this->getLoggedUser(), $this->getYear());

        $view = $this->getYear().'.training.'.$training['type'];

        if ($training['type'] == 'quiz' && $this->trainingRepository->quizDone($year, $this->getLoggedUser(), $item))
        {
            return redirect()->route('quiz.result', ['year' => $year, 'id' => $item]);
        }

        return view($view)
            ->with('loggedUser', $this->getLoggedUser())
            ->with('itemId', $item)
            ->with('lesson', $training);
    }
}
