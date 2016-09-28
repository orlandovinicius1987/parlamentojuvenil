<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;

class Quiz extends Training
{
    public function index()
	{
        if ($this->user) {
            return $this->renderQuiz($this->user, $this->trainingRepository);
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

    public function questions($year, $itemId)
    {
        $data = $this->trainingRepository->findById($itemId, $this->user, $this->year);

        return (new Collection($data))->toJson();
    }
}
