<?php

namespace App\Http\Controllers;

use \DB;
use App\Data\Entities\School;
use App\Data\Entities\Subscription;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;
use Illuminate\Database\Eloquent\Collection;

class Admin extends BaseController
{
    private $trainingRepository;

    public function __construct(TrainingRepository $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;
    }

    private function extractId($id, $elements = 1)
    {
        $id = explode('.', $id);

        $count = count($id)  > 5 ? count($id)-4 : count($id)-3;

        $id = array_slice($id, -($count), ($count));

        return implode('.', $id);
    }

    function index()
	{
		return view('admin.index');
	}

	function city($city)
	{
		return view('admin.city')
				->with('city', $city)
				->with('subscriptions', Subscription::where('city', $city)->get())
				->with('schools', School::where('city', 'like', DB::raw("UPPER('".$city."')"))->get())
		;
	}

    function elected()
    {
        $elected = Subscription::with('quizResult')->where('elected', true)->orderBy('name')->get();

        return view('admin.elected')->with('elected', $elected);
    }

    private function makeTitle($course)
    {
        $title = '';

        if (isset($course['title']) && $course['type'] == 'video')
        {
            $title = sprintf('Video (%s): ', $this->extractId($course['id'])) . $course['title'];
        }

        if (isset($course['title']) && $course['type'] == 'document')
        {
            $title = sprintf('Apostila (%s): ', $this->extractId($course['id'])) . $course['title'];
        }

        if (isset($course['question']))
        {
            $title = sprintf('Quiz (%s): ', $this->extractId($course['id'])) . $course['question'];
        }

        return $title;
    }

    function schools()
	{
		$schools = School::join('subscriptions', 'subscriptions.school', '=', 'schools.name')
				->select(['schools.name', 'schools.city', DB::raw('count(*) as schoolcount')])
				->groupBy(['schools.name', 'schools.city'])
				->orderBy('schoolcount', 'desc')
				->orderBy('schools.city')
				->orderBy('schools.name')
				->get();

		return view('admin.schools')
			->with('schools', $schools)
		;
	}

    public function training($id)
    {
        $year = 2016;

        $subscription = Subscription::with('watched')->find($id);

        foreach ($subscription->watched as $item) {
            if (! $course = $this->trainingRepository->findById($item->item_id, $subscription, $year))
            {
                continue;
            }

            if (isset($course['question'])) {
                $course['id'] = $item->item_id;
            }

            $title = $this->makeTitle($course);

            if (isset($course['type']) && $course['type'] == 'quiz') {
                if (isset($course['questions']))
                {
                    continue;
                }
            }

            $item->setAttribute('title', $title);
        }

        $watched = new Collection($subscription->watched->toArray());

        $watched = $watched->sortBy('watched.title');

        return view('admin.training')->with('watched', $watched)->with('name', $subscription->name);
    }
}
