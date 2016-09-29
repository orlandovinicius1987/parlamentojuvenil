<?php

namespace App\Http\Controllers;

use App\Data\Entities\Watched;
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

    private function makeResult($year, $id)
    {
        $result = $this->trainingRepository->getResult($year, $id, $this->getLoggedUser());

        foreach ($result as $item)
        {

        }
    }

    private function renderQuiz($user, $repository)
    {
        return view($this->year.'.quiz.index')->with('loggedUser', $user);
    }

    public function result($year, $id)
    {
        $result = $this->makeResult($year, $id);

        return view($this->year.'.training.quiz-result')->with('result', $result);
    }

    public function questions($year, $itemId)
    {
        $data = $this->trainingRepository->findById($itemId, $this->user, $this->year);

        return (new Collection($data))->toJson();
    }

    public function answer($year, $itemId, $number, $answer)
    {
        $this->trainingRepository->markAsWatched($year, "$itemId.$number", $answer);
    }
}
