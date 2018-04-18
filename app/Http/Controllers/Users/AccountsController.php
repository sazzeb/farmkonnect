<?php

namespace App\Http\Controllers\Users;


use Auth;
use Session;
use App\User;
use DateTime;
use App\W_fund;
use App\withdrawal;
use App\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class AccountsController extends Controller
{
    public function dashboard()
    {
        $fundedAmt = Auth::user()->fund_wallet;
        
        return view('Users.dashboard')->with('funded_amt', $fundedAmt)
        ->with('wallet_bal',Auth::User()->profile);
    }
    
    public function fund_wallet()
    {
        //Retrieving data
        $funded= DB::table('w_funds')->where('user_id',Auth::user()->id)
        ->orderby('id', 'desc')
        ->get();
        
        
        return view('Users.fund', compact('funded'));
    }
    
     public function withdrawal()
    {
       
        //Retrieving data
        $withdrawal= DB::table('withdrawals')->where('user_id',Auth::id())->latest()
        ->get();
        
       
        return view('Users.withdrawal',compact('withdrawal'));
    }
   
    public function referrals()
    {
        return view('Users.referrals');
    }
    
    public function support()
    {
        return view('Users.support');
    }
    
    public function profile()
    {
        return view('Users.profile')->with('info', Auth::user()->profile);
    }
    
    public function investment()
    {
        $investfunnder = Inverstment::where('user_id', Auth::user()->id)
                ->orderby('id', 'desc')
                ->get();
        return view('Users.investment', ['investfund' => $investfunnder]);
    }
    
    public function forgotpassword()
    {
        return view('Users.forgotpassword');
    }
    
   
    
    //Save fund wallet data user section
    
    public function fund_bank_data(Request $request){
        
        $rules = [
            'bank' => 'required',
            'teller_no'=>'required',
            'amount'=> 'required',
            'teller_image'=>'required'
            
        ];
        
        $this->validate($request, $rules);
        
        $data = $request->all();
        if ($request->hasFile('teller_image')) {
            $data['t_img'] = $request->teller_image->store('public/images/tellers_img');
        }
        
        W_fund:: create($data);
        Session::flash('message', 'Wallet Funding Successful ( Awaiting  Approval )');
        return redirect()->back();        
        
    }
    
    public function make_withdrawal(Request $request){
        $rules=[
            'acc_name'=>'required',
            'acc_no'=>'required',
            'bank'=>'required',
            'amount'=>'required'
            ];
            
            $this->validate($request, $rules);
            $data= $request->all();
            withdrawal::create($data);
            Session:: flash('message', 'Withdrawal Request Sent ( Awaiting Approval )');
            return redirect()->back();
    }
    
    
    public function edit(){
        return view('Users.edituser')->with('next', Auth::user()->nok);
    }
    
    
    public function updateuser(Request $request){
        $this->validate($request, [
            'location' => 'required|max:255',
            'phone_num' => 'required|numeric',
            'occupation' =>  'required|max:255',
            'name' => 'required|string|max:255'
        ]);
        
        Auth::user()->profile()->update([
            'location' => $request->location,
            'phone_num' => $request->phone_num,
            'occupation' => $request->occupation
        ]);
    
        Auth::user()->update([
            'name' => $request->name,
        ]);

        if($request->hasFile('avatar')){
            Auth::user()->profile()->update([
                'avatar' => $request->avatar->store('public/avatars')
            ]);
        }

        Session::flash('success', 'profile updated');

        return redirect()->back();
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    
    
}
