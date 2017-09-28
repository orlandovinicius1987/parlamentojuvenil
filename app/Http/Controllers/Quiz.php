<?php

namespace App\Http\Controllers;

use App\Data\Entities\Watched;
use Illuminate\Database\Eloquent\Collection;

class Quiz extends Training
{
    public function index($id)
	{
        if (loggedUser()->user) {
            return $this->renderQuiz(loggedUser()->user, $id, $this->trainingRepository);
        }

		return redirect()->route('training.index');
	}

    private function makeResult($id)
    {
        return new Collection($this->trainingRepository->getResult($id, $this->getLoggedUser()));
    }

    private function renderQuiz($user, $id, $repository)
    {
        if ($this->trainingRepository->quizDone($user, $id))
        {
            return $this->result();
        }

        return view(get_current_year().'.quiz.index')->with('loggedUser', $user);
    }

    public function result($id)
    {
        $result = $this->makeResult($id);

        return view(get_current_year().'.training.quiz-result')
            ->with('correct', $correct = $result->where('correct', true)->count())
            ->with('total', $total = $result->count())
            ->with('percent', ($correct/$total)*100);
    }

    public function questions($itemId)
    {
        $data = $this->trainingRepository->findById($itemId, loggedUser()->user, get_current_year());

        return (new Collection($data))->toJson();
    }

    public function answer($itemId, $number, $answer)
    {
        $this->trainingRepository->markAsWatched("$itemId.$number", $answer);
    }
}
