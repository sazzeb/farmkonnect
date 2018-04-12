<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferralList extends Model
{
    protected $fillable = ['depositors_id','ref_id','referrer_email','referrer_code','referrer_generation'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
