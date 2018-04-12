<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admins.dashboard');
    }
    
    
    public function manage_users(){
        
        return view('admins.users');
    }
    public function user_profile(){
        return view('admins.user_profile');
    }
    
    public function user_deposit(){
        return view('admins.user_deposit');
    }
    
    public function user_deposit_history(){
        return view('admins.user_deposit_history');
    }
    
    public function user_add_money(){
        return view('admins.user_add_money');
    }
    
    public function withdrawal_pending(){
        return view('admins.withdrawal_pending');
    }
    
    public function withdrawal_completed(){
        return view('admins.withdrawal_completed');
    }
    
    public function withdrawal_history(){
        return view('admins.withdrawal_history');
    }
    
    public function support_admin(){
        return view('admins.support_admin');
    }
    
    public function support_admin_message(){
        return view('admins.support_admin_message');
    }
    
    public function user_blocked(){
        return view('admins.user_blocked');
    }
    
    public function user_deposit_pending(){
        return view('admins.user_deposit_pending');
    }
    
    public function support_pending(){
        return view('admins.support_pending');
    }
    
    public function investment(){
        return view('admins.investment');
    }
    
    public function referrals(){
        return view('admins.referrals');
    }
    
}
