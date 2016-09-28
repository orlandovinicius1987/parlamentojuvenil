<?php

namespace App\Data\Repositories;

use App\Data\Entities\Watched;
use Illuminate\Database\Eloquent\Collection;
use Session;
use App\Data\Entities\Subscription;

class Training
{
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

        foreach ($training as $itemKey => $item)
        {
            foreach ($item['relations'] as $relationKey => $relation) {
                foreach ($relation as $elementKey => $element) {
                    $element['id'] = "{$item['id']}.{$element['id']}";
                    $element['watch-url'] = route('training.watch', ['year' => 2016, 'item' => $element['id']]);
                    $element['watched'] = Watched::where('subscription_id', $user->id)->where('item_id', $element['id'])->first();

                    $item['relations'][$relationKey][$elementKey] = $element;
                }
            }

            $collection->push($item);
        }

        return $collection;
    }

    public function markAsWatched($year, $item)
    {
        $user = Session::get('logged-user');

        $watched = Watched::where('subscription_id', $user->id)
                    ->where('item_id', $item)->first();

        if (! $watched)
        {
            Watched::create([
                'subscription_id' => $user->id,
                'item_id' => $item,
            ]);
        }
    }
}
