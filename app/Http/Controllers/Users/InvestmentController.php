<?php

namespace App\Http\Controllers\Users;


use Auth;
use Session;
use App\User;
use DateTime;
use App\Investment;
use App\ReferrerBonus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestmentController extends Controller
{
    
    
    public function investment()
    {
        $investfunnder = Investment::where('user_id', Auth::user()->id)
                ->orderby('id', 'desc')
                ->get();
        return view('Users.investment', ['investfund' => $investfunnder]);
    }
    
    
    public function nextup(Request $request)
    {
        $this->validate($request, [
            'location' => 'required|max:255',
            'phone_num' => 'required|numeric',
            'name' => 'required|string|max:255'
        ]);
        
        Auth::user()->nok()->update([
            'name' => $request->name,
            'location' => $request->location,
            'phone_num' => $request->phone_num
        ]);
        
        

        if($request->hasFile('avatar')){
            Auth::user()->nextofkind()->update([
                'avatar' => $request->avatar->store('public/avatars')
            ]);
        }

        Session::flash('success', 'profile updated');

        return redirect()->back();
    }
    
    
    
    public function investfund(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'packages' => 'required'
        ]);
        
        $i = 0;
        $count = 0;
        
        $packages = config('farmkonnect.packages');
        foreach($packages as $key => $package) {
            if($request->packages === $key && $request->amount >= $package) {
                $count = ++$i;
                break;
            }
            $i++;
        }
        
        if ($package === 0)
        {
            Session::flash('danger', 'The least amount to be deposited at that package is '. $package);
            return view('Users.investment');
        }
        $created_date = new DateTime();
        $user_id = Auth::user()->id;
        
        $status = 0;
        
        
        $daily_profit = ($request->amount*48)/(100*365);
        
        $monthlyProfit = $daily_profit;
        
        $profit = $daily_profit;
        
        $referer_bonus = 0.00;
        
        Investment::create([
            'user_id' => $user_id,
            'amount' => $request->amount,
            'packages' => $count,
            'profit' => $profit,
            'status' => $status,
            'created_date' => $created_date
            ]);
        if(!empty(Auth::user()->referrer_code) && !empty(Auth::user()->referrer_email))
        {
            $st_refer_email = Auth::user()->referrer_email;
            
            $st_refer = User::whereEmail($st_refer_email)->first();
            $email_refs = Auth::user()->email;
            $ids_ref = $st_refer->id;
            
            $refs_daily_profit = ($request->amount*4)/(100*360);
            
            
            ReferrerBonus::create([
                'user_id' => $user_id,
                'refer_id' => $ids_ref,
                'amount_deposited' => $request->amount,
                'depositors_email' => Auth::user()->email,
                'refer_email' => $st_refer_email,
                'referrer_profit' => $refs_daily_profit
            ]);
            
        }else{
            return null;
        }
        
        
        if(!empty(Auth::user()->referrer_code) && !empty(Auth::user()->referrer_email))
        {
            $sec_ref = User::whereEmail(Auth::user()->referrer_email)->first();
            
            if(!empty($sec_ref->referrer_code) && !empty($sec_ref->referrer_email))
            {
                
                
                $sec_ref_email = $sec_ref->referrer_email;
                
                $second = User::whereEmail($sec_ref->referrer_email)->first();
                
                $sec_ref_id = $second->id;
                
                $sec_daily_profit = ($request->amount*3)/(100*360);
                
                
                ReferrerBonus::create([
                    'user_id' => $user_id,
                    'refer_id' => $sec_ref_id,
                    'amount_deposited' => $request->amount,
                    'depositors_email' => Auth::user()->email,
                    'refer_email' => $sec_ref_email,
                    'referrer_profit' => $sec_daily_profit
                ]);
                
                
            }else{
                return null;
            }
        }else{
            return null;
        }
        Session::flash('success', 'Congratulation your invested has been made');
        return redirect()->back();
    }
}
