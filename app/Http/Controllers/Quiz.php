<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Training as TrainingRepository;

class Quiz extends Training
{
    public function index(TrainingRepository $repository)
	{
        if ($user = $this->getLoggedUser()) {
            return $this->renderQuiz($user, $repository);
        }

		return redirect()->route('training.index');
	}

    private function renderQuiz($user, $repository)
    {
        return view('2016.quiz.index')->with('loggedUser', $user);
    }

    public function result()
    {
        return view('2016.quiz.result')->with('loggedUser', $this->getLoggedUser());
    }
}
