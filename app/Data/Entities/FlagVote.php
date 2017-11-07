<?php

namespace App\Data\Entities;

use App\Base\Model;

class FlagVote extends Model
{
	protected $table = 'flag_votes';

    protected $fillable = [
        'flag_id',
        'student_id',
        'year',
        'registration',
        'is_valid',
    ];

    public function flag()
    {
        return $this->belongsTo(Flag::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
