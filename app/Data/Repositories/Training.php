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

        foreach ($training as $item)
        {
            $item['watch-url'] = route('training.watch', ['year' => 2016, 'item' => $item['id']]);

            $item['watched'] = Watched::where('subscription_id', $user->id)->where('item_id', $item['id'])->first();

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
