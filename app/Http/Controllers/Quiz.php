<?php

namespace App\Http\Controllers;

class Quiz extends Training
{
    public function index()
	{
        if ($user = $this->getLoggedUser()) {
            return $this->renderQuiz($user, $this->trainingRepository);
        }

		return redirect()->route('training.index');
	}

    private function renderQuiz($user, $repository)
    {
        return view($this->year.'.quiz.index')->with('loggedUser', $user);
    }

    public function result()
    {
        return view($this->year.'.training.quiz-result')->with('loggedUser', $this->getLoggedUser());
    }
}
