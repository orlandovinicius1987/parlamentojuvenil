<?php

namespace App\Data\Repositories;

use Carbon\Carbon;
use DB;
use Mail;
use Rhumsaa\Uuid\Uuid;
use App\Data\Entities\FlagContest as FlagContestModel;

class FlagContest extends Repository
{
    private function findByConfirmationAndEmail($confirmation_key, $email)
    {
        return FlagContestModel::where([
            'confirmation_key' => $confirmation_key,
            'email' => $email,
        ])->first();
    }

    private function findByStudentId($student_id)
    {
        return FlagContestModel::where([
            'student_id' => $student_id,
            'year' => get_current_year(),
        ])->first();
    }

    private function findOrCreate($data)
    {
        $model = FlagContestModel::where(array_only($data, ['studen_id', 'year']))->first();

        if (is_null($model)) {
            $model = FlagContestModel::create($data);
        }

        if (is_null($model->confirmed_at)) {
            $model->email = $data['email'];

            $model->save();

            $this->sendConfirmationEmail($model);
        }

        return $model;
    }

    private function sendConfirmationEmail($subscription)
    {
        Mail::send('emails.flag-contest-email-confirmation', ['subscription' => $subscription], function ($message) use ($subscription) {
            $message->to($subscription->email, $subscription->student->name)->subject('Confirme seu endereço de e-mail');
        });
    }

    public function subscribe($input)
    {
        $data = [
            'student_id' => loggedUser()->student->id,

            'year' => get_current_year(),

            'confirmation_key' => (string) Uuid::uuid4(),

            'email' => $input['email'],
        ];

        $flag_contest = $this->findOrCreate($data);

        return $flag_contest;
    }

    public function confirm($confirmation_key, $email)
    {
        $model = $this->findByConfirmationAndEmail($confirmation_key, $email);

        if (! is_null($model)) {
            if (is_null($model->confirmed_at)) {
                $model->confirmed_at = Carbon::now();

                $model->save();
            }
        }

        return $model;
    }

    public function isStudentSubscribed($student_id)
    {
        $model = $this->findByStudentId($student_id);

        return ! is_null($model) && ! is_null($model->confirmed_at);
    }
}
