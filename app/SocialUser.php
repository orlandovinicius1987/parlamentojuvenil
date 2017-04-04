<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SocialUser extends Model
{
    protected $dates = ['deleted_at'];

    protected $guarded = ['user_id', 'student_id', 'social_network_id', 'data'];

    public function find($id)
    {
        return self::where('social_network_user_id', $id)->first();
    }

    // Socialite
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function socialNetwork()
    {
        return  $this->belongsTo('App\SocialNetwork');
    }


    public function student()
    {
        return $this->belongsTo('App\Students');
    }
}
