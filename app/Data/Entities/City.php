<?php

namespace App\Data\Entities;

use App\Base\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'state_id',
    ];

	public function state()
	{
		return $this->belongsTo(State::class);
	}

    public function getCleanNameAttribute($name)
    {
        return mb_strtoclean($name);
	}
}
