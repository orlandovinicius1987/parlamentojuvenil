<?php

namespace App\Data\Repositories;

use App\Data\Entities\Watched;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Data\Entities\Subscription;
use App\Data\Entities\Training as TrainingModel;

class Training extends Repository
{
    public function findById($item, $user, $year)
    {
        $training = $this->addTrainingData($user, TrainingModel::byYear($year));

        foreach ($training as $course)
        {
            foreach ($course['relations'] as $relation) {
                foreach ($relation as $element) {
                    if ($element['id'] == $item)
                    {
                        return $element;
                    }

                    if ($element['type'] == 'quiz' && starts_with($item, $element['id']))
                    {
                        foreach ($element['questions'] as $key => $question) {
                            if ($element['id'].'.'.$key == $item)
                            {
                                return $question;
                            }
                        }
                    }
                }
            }
        }

        return null;
    }

    private function getAnswerFor($year, $id, $user, $answer)
    {
        $training = $this->findById($id, $user, $year);

        foreach ($training['questions'] as $key => $question) {
            if ("$id.$key" == $answer)
            {
                return $question['correct'];
            }
        }

        return null;
    }

    public function getResult($year, $id, $user)
    {
        $answers = Watched::where('item_id', 'like', $id.'.%')->where('subscription_id', $user->id)->get()->toArray();

        foreach ($answers as $key => $item)
        {
            $answers[$key]['correct'] = $answers[$key]['answer'] == $this->getAnswerFor($year, $id, $user, $answers[$key]['item_id']);
        }

        return $answers;
    }

    public function addTrainingData($user, $training)
    {
        $collection = new Collection();

        $visible = true;

        foreach ($training as $itemKey => $item)
        {
            $item['visible'] = $visible;

            foreach ($item['relations'] as $relationKey => $relation)
            {
                $done = true;

                foreach ($relation as $elementKey => $element) {
                    $element['id'] = "{$item['id']}.{$element['id']}";
                    $element['watch-url'] = route('training.watch', ['video' => $element['id']]);
                    $element['watched'] = Watched::where('subscription_id', $user->id)->where('item_id', $element['id'])->first();
                    $element['visible'] = $visible || $element['watched'];

                    $done = $done && $element['watched'];

                    if($relationKey == 'quiz')
                    {
                        $element['answer'] = $element['watched'] ? $element['watched']->answer : null;
                    }

                    $visible = $element['watched'] !== null;

                    $item['relations'][$relationKey][$elementKey] = $element;
                }
            }

            $item['done'] = $done;

            $collection->push($item);
        }

        return $collection;
    }

    public function markAsWatched($item, $answer = null)
    {
        $watched = Watched::where('subscription_id', $userId = loggedUser()->user->id)
                    ->where('item_id', $item)->first();

        if (! $watched)
        {
            $watched = Watched::create([
                'subscription_id' => $userId,
                'item_id' => $item,
            ]);
        }

        $watched->answer = $answer;
        $watched->save();
    }

    public function quizDone($year, $user, $id)
    {
        if ($result = $this->getResult($year, $id, $user))
        {
            $done = true;

            foreach ($result as $item) {
                $done = $done && $item['answer'];
            }
        }

        return $result ? $done : false;
    }
}
