<?php

namespace App\Data\Entities;

use App\Base\Model;

class Subscription extends Model
{
	protected $dates = ['created_at', 'updated_at', 'disabled_at'];

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

    public function schoolRecord()
    {
        return $this->belongsTo(School::class, 'school', 'name');
    }
}
