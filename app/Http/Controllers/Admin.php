<?php

namespace App\Http\Controllers;

use \DB;
use App\Data\Entities\School;
use App\Data\Entities\Subscription;
use App\Http\Controllers\Controller as BaseController;
use App\Data\Repositories\Training as TrainingRepository;

class Admin extends BaseController
{
    private $trainingRepository;

    public function __construct(TrainingRepository $trainingRepository)
    {
        $this->trainingRepository = $trainingRepository;
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
            $course = $this->trainingRepository->findById($item->item_id, $subscription, $year);

            $title = isset($course['title']) ?  $course['title'] : '';

            if (isset($course['type']) && $course['type'] == 'quiz') {
                if (isset($course['questions']))
                {
                    continue;
                }
            }

            if (isset($course['question'])) {
                $title = $course['question'];
            }

            $item->setAttribute('title', $title);
        }

        return view('admin.training')
            ->with('subscription', $subscription)
        ;
    }
}
