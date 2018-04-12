<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdrawal extends Model
{
    //
    
    protected $fillable=[
        'user_id',
        'acc_name',
        'acc_no',
        'bank',
        'amount',
        'ref_id',
        'w_status'
        
        ];
        
        
         /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     
     protected $table = 'withdrawals';
     
     public function user(){
         return $this->belongsTo('App\withdrawal');
     }
}
