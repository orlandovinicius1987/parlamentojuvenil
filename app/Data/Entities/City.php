<?php

namespace App\Data\Entities;

use App\Base\Model;

class City extends Model
{
	public function state()
	{
		return $this->belongsTo(State::class);
	}
}
