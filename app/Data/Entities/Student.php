<?php

namespace App\Data\Entities;

use App\Base\Model;

class Student extends Model
{
	protected $dates = ['created_at', 'updated_at'];

	protected $table = 'students';

	protected $fillable = [
        'registration',
        'birthdate',
        'name',
        'school',
        'city',
    ];

    public function getSocialNameAttribute()
    {
        return studly(strtolower(
            isset($this->attributes['social_name'])
                ? $this->attributes['social_name']
                : explode(' ', trim($this->name))[0]
        ));
	}

	public static function createStudent($attributes)
    {
        $student = static::create($attributes);

        $student->social_name = $student->getSocialNameAttribute();

        $student->save();

        return $student;
    }
}
