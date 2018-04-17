<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Profile extends Model
{
    protected $fillable = [ 'location', 'phone_num', 'occupation', 'avatar', 'user_id','wallet_balance'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function getAvatarAttribute($avatar)
    {
        return asset(Storage::url($avatar));
    }
}
