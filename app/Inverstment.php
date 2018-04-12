<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inverstment extends Model
{
    protected $fillable = [
        'user_id', 'amount','status','packages','referer_bonus','daily_profit','monly_profit','yrly_profit','profit','created_date',
        ];
}
