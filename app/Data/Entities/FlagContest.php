<?php

namespace App\Data\Entities;

use App\Base\Model;

class FlagContest extends Model
{
	protected $dates = ['created_at', 'updated_at', 'disabled_at'];

	protected $fillable = [
        'year',
        'student_id',
	];
}
