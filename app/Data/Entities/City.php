<?php

namespace App\Data\Entities;

use DB;
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

	public static function findCityByname($name)
    {
        return static::where(DB::raw('unaccent(name)'), '~*', $name)->first();
    }
}
