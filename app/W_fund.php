<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class W_fund extends Model
{
    //
    protected $fillable=[
        'user_id',
        'bank',
        'teller_no',
        'amount',
        'fund_type',
        'f_status',
        'ref_id',
        't_img'
        // all data field
        
        ];
        
        
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     
     
     protected $table = 'w_funds';
     
     
     public function user(){
         return $this->belongsTo('App\User');
     }
}
