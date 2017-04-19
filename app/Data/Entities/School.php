<?php

namespace App\Data\Entities;

use App\Base\Model;

class School extends Model
{
    protected $table = 'schools';
    
	public function state()
	{
		return $this->belongsTo(City::class);
	}

	public function subscriptions()
	{
		return $this->hasManyThrough(Subscription::class, Student::class, 'school', 'student_id');
	}

    public static function allByName($name)
    {
        return static::whereRaw(
            sprintf(
                "lower(unaccent(city)) ~* '%s'",
                mb_strtoclean($name)
            )
        )->orderBy('name')->get();
	}
}
