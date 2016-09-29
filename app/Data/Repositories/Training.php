<?php

namespace App\Data\Repositories;

use App\Data\Entities\Watched;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Data\Entities\Subscription;
use App\Data\Entities\Training as TrainingModel;

class Training
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
                }
            }
        }

        return null;
    }

    public function getResult($year, $id, $user)
    {
        $answers = Watched::where('item_id', 'like', $id.'.%')->where('subscription_id', $user->id)->get();

        dd($answers);
    }

    public function login($registration, $birthdate)
    {
        $person = Subscription::where('registration', $registration)
                    ->where('birthdate', $birthdate)
                    ->first();

        Session::put('logged-user', $person);

        return $person;
    }

    public function addTrainingData($user, $training)
    {
        $collection = new Collection();

        $visible = true;

        foreach ($training as $itemKey => $item)
        {
            $item['visible'] = $visible;

            foreach ($item['relations'] as $relationKey => $relation) {

                foreach ($relation as $elementKey => $element) {
                    $element['id'] = "{$item['id']}.{$element['id']}";
                    $element['watch-url'] = route('training.watch', ['year' => 2016, 'item' => $element['id']]);
                    $element['watched'] = Watched::where('subscription_id', $user->id)->where('item_id', $element['id'])->first();
                    $element['visible'] = $visible || $element['watched'];

                    if($relationKey == 'quiz')
                    {
                        $element['answer'] = $element['watched'] ? $element['watched']->answer : null;
                    }

                    $visible = $element['watched'] !== null;

                    $item['relations'][$relationKey][$elementKey] = $element;
                }
            }

            $collection->push($item);
        }

        return $collection;
    }

    public function markAsWatched($year, $item, $answer = null)
    {
        $user = Session::get('logged-user');

        $watched = Watched::where('subscription_id', $user->id)
                    ->where('item_id', $item)->first();

        if (! $watched)
        {
            $watched = Watched::create([
                'subscription_id' => $user->id,
                'item_id' => $item,
            ]);
        }

        $watched->answer = $answer;
        $watched->save();
    }
}
