<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'user_id', 'amount','status','packages','daily_profit','monly_profit','yrly_profit','profit','created_date',
        ];
}
