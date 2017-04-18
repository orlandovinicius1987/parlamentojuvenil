<?php

namespace App\Data\Entities;

use Carbon\Carbon;
use App\Base\Model;

class Student extends Model
{
	protected $dates = ['created_at', 'updated_at', 'birthdate'];

	protected $table = 'students';

	protected $prefilled = [
        'registration',
        'birthdate',
        'name',
        'school',
        'city',
        'email',
    ];

    protected $fillable = [
        'name',
        'social_name',
        'city',
        'school',
        'registration',
        'grade',
        'gender',
        'gender2',
        'birthdate',
        'cpf',
        'id_number',
        'id_issuer',
        'email',
        'phone_home',
        'phone_cellular',
        'zip_code',
        'address',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'facebook',
    ];

    /**
     * @return array
     */
    public function getPrefilled()
    {
        return $this->prefilled;
    }

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

    public function getBirthdateAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
}
