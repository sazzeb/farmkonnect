<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nok extends Model
{
    protected $fillable = [ 'location', 'phone_num', 'name', 'avatar', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function getAvatarAttribute($avatar)
    {
        return asset(Storage::url($avatar));
    }
}
