<?php

namespace App\Console\Commands;

use DB;
use App\User;
use App\Investment;
use App\ReferrerBonus;
use Illuminate\Console\Command;

class ProfitController extends Command
{
    
    protected $signature = 'ProfitController:Profit';

    
    protected $description = 'Update Investment on daily bases';

    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        
        $invests = DB::table('investments')
          ->get();
          
         $referrer_bonuses = DB::table('referrer_bonuses')
          ->get();
          
          
        foreach($invests as $invest)
        {
            $days = $invest->daily_profit;
            $month = $invest->monly_profit;
            $yearly = $invest->yrly_profit;
            
            $amount = $invest->amount;
            $id = $invest->id;
            
            $dayly_amount = ($amount*48)/(100*365);
            
            $dayst = $days + $dayly_amount;
            
            $mont = $month + $dayly_amount;
            
            $year = $yearly + $dayly_amount;
            
            Investment::whereId($id)->update([
                
                'daily_profit' => $dayst,
                'monly_profit' => $mont,
                'yrly_profit' => $yearly,
                
            ]);
        }
        
        foreach($referrer_bonuses as $referrer_bonus)
        {
            $ref_profit = $referrer_bonus->referrer_profit;
            $dep_amount = $referrer_bonus->amount_deposited;
            
            $adn = ($dep_amount*4)/(100*365);
            
            $profit = $ref_profit + $adn;
            
            $rId = $referrer_bonus->id;
            
            ReferrerBonus::whereId($rId)->update([
                
                'referrer_profit' => $profit
                
                ]);
        }
    }
}
