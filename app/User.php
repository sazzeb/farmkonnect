<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email','referrer_email', 'password','referral_code','referrer_code','verified',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
    
    public function profile(){
        return $this->hasOne('App\Profile');
    }
    
     public function nok(){
        return $this->hasOne('App\Nok');
    }
    
    public function fund_wallet(){
        return $this->hasMany('App\W_fund');
        
    }
    
    public function make_withdrawal(){
        return $this ->hasMany('App\withdrawal');
    }
    
    public function referral_list(){
        return $this ->hasMany('App\ReferralList');
    }
    
}
