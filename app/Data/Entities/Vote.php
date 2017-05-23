<?php

namespace App\Data\Entities;

use App\Base\Model;

class Vote extends Model
{
	protected $table = 'votes';

    protected $fillable = [
        'student_id',
        'subscription_id',
        'round',
        'year',
    ];
}
