<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferrerBonus extends Model
{
    protected $fillable = ['user_id', 'refer_id', 'referrer_profit', 'amount_deposited','refer_email','depositors_email',];
}
