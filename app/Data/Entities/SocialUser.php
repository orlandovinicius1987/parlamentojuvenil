<?php

namespace App\Data\Entities;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'social_network_id',
        'social_network_user_id',
        'data',
    ];

    public function find($id)
    {
        return self::where('social_network_user_id', $id)->first();
    }

    public function user()
    {
        return $this->belongsTo('App\Data\Entities\User');
    }

    public function socialNetwork()
    {
        return  $this->belongsTo('App\Data\Entities\SocialNetwork');
    }

    public function student()
    {
        return $this->belongsTo('App\Data\Entities\Student');
    }
}
