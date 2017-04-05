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
    ];
}
