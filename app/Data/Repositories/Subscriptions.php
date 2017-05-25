<?php

namespace App\Data\Repositories;

use DB;
use App\Data\Entities\Vote;
use App\Data\Entities\Subscription;

class Subscriptions extends Repository
{
    public function candidates($year = null, $round = null)
    {
        $query = Subscription::query();

        $query->select(
            'users.name as user_name',
            'users.avatar as user_avatar',
            'users.email as user_email',
            'students.name as student_name',
            'students.city as student_city',
            'students.school as student_school',
            'subscriptions.id as subscription_id'
        );

        $query->where('ignored', false);

        $query->where('year', $this->getCurrentYear($year));

        $query->join('social_users', 'social_users.student_id', '=', 'subscriptions.student_id');

        $query->join('users', 'social_users.user_id', '=', 'users.id');

        if ($this->getCurrentRound($round) == 2) {
            $query->where('elected_1nd', true);
        }

        return $query;
    }

    public function candidatesForSchool($year = null, $round = null, $query = null)
    {
        return $this
                ->makeCandidatesQuery($year, $round, $query)
                ->where('students.school', loggedUser()->student->school)
                ->get()
        ;
    }

    public function candidatesForCity($year = null, $round = null, $query = null)
    {
        \DB::listen(function($sql, $bindings = [], $time = []) { info($sql); info($bindings); });

        return $this
                ->makeCandidatesQuery($year, $round, $query)
                ->where('students.city', loggedUser()->student->city)
                ->get()
        ;
    }

    public function candidatesFirstRound($year = null)
    {
        return $this->candidates($year, 1);
    }

    public function candidatesSecondRound($year = null)
    {
        return $this->candidates($year, 2);
    }

    public function checkIfUserCanVote()
    {
        $vote = Vote::where('year', $this->getCurrentYear())
                    ->where('student_id', loggedUser()->student->id)
                    ->where('round', $this->getCurrentRound())
                    ->get()
        ;

        if ($vote->count() > 0) {
            throw new StudentAlreadyVoted();
        }
    }

    public function deleteMyVotes()
    {
        Vote::where('student_id', loggedUser()->student->id)->delete();

        dd('votes deleted.');
    }

    public function getCandidateBySubscription($subscription_id)
    {
        return $this->getCandidates(
            $this->candidates()->where('subscriptions.id', $subscription_id)
        )->first();
    }

    private function makeCandidatesQuery($year, $round, $query = null)
    {
        if (is_null($query)) {
            $query = $this->candidates($year, $round);
        }

        return $query->join('students', 'students.id', '=', 'subscriptions.student_id');
    }

    public function markAllElected()
    {
        $electedField = 'elected_'.$this->getCurrentRound().'nd';

        $round = $this->getCurrentRound();

        $query = Subscription::query();

        $query->select(
            'students.name as student_name',
            'students.city as city_name',
            'subscriptions.id as subscription_id',
            'students.school as school_name',
            DB::raw(sprintf('(select count(*) from votes where year = %s and round = %s and votes.subscription_id = subscriptions.id) as votes', $this->getCurrentYear(), $round))
        );

        $query->where('year', $this->getCurrentYear());

        $query->join('students', 'students.id', '=', 'subscriptions.student_id');

        if ($round == 1) {
            $query->orderBy('school_name', 'asc');

            $votePer = 'school_name';
        } else {
            $query->orderBy('city_name', 'asc');

            $votePer = 'city_name';
        }

        $query->orderBy('votes', 'desc');

        $votes = $query->get();

        DB::transaction(function () use ($votes, $electedField, $votePer) {
            $currentSchool = '';

            Subscription::where('year', $this->getCurrentYear())->update([$electedField => false]);

            foreach ($votes as $vote) {
                if ($currentSchool !== $vote[$votePer]) {
                    $currentSchool = $vote[$votePer];

                    $neededVotes = $vote['votes']; /// this is the max votes of this school
                }

                if ($vote['votes'] == $neededVotes && $neededVotes > 0) {
                    $subscription = Subscription::find($vote['subscription_id']);

                    $subscription->{$electedField} = true;

                    $subscription->save();
                }
            }
        });
    }

    public function getCandidates($query = null, $year = null)
    {
        $method = $this->getCurrentRound() == 1
                    ? 'candidatesForSchool'
                    : 'candidatesForCity'
        ;

        return $this->{$method}($this->getCurrentYear($year), $this->getCurrentRound(), $query);
    }

    public function voteIn($subscription_id)
    {
        $this->checkIfUserCanVote();

        Vote::create([
            'student_id' => loggedUser()->student->id,
            'subscription_id' => $subscription_id,
            'round' => $this->getCurrentRound(),
            'year' => $this->getCurrentYear(),
        ]);
    }

    public function getElectedOn1and2($year = null)
    {
        $year = $this->getCurrentYear($year);

        $values = Subscription::with('quizResult')
                ->select(
                    'students.name',
                    'students.city',
                    'students.birthdate',
                    'students.registration',
                    'subscriptions.elected_1nd',
                    DB::raw("(select count(*) from votes where votes.subscription_id = subscriptions.id and votes.round = 1 and votes.year = $year) as votes_1nd"),
                    'subscriptions.elected_2nd',
                    DB::raw("(select count(*) from votes where votes.subscription_id = subscriptions.id and votes.round = 2 and votes.year = $year) as votes_2nd")
                )
                ->join('students', 'students.id', '=' , 'subscriptions.student_id')
                ->where(function ($query) {
                    $query->where('elected_1nd', true);
                    $query->orWhere('elected_2nd', true);
                })
                ->get()
        ;

        return $values;
    }
}
