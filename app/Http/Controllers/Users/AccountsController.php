<?php

namespace App\Http\Controllers\Users;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\W_fund;
use App\withdrawal;
use App\User;
use Session;
use DateTime;
use App\Inverstment;
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
        $investfunnder = Investment::where('user_id', Auth::user()->id)
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
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
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
        
        if(!empty(Auth::user()->referrer_email) && !empty(Auth::user()->referrer_code))
        {
            $referrer = User::whereEmail(Auth::user()->referrer_email);
        }
        
        Inverstment::create([
            'user_id' => $user_id,
            'amount' => $request->amount,
            'packages' => $count,
            'profit' => $profit,
            'status' => $status,
            'referer_bonus' => $referer_bonus,
            'created_date' => $created_date
            ]);
        Session::flash('success', 'Congratulation your invested has been made');
        return redirect()->back();
    }
}
