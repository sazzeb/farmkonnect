<?php

namespace App\Http\Controllers\Users;

use Mail;
use Keygen;
use App\Nok;
use App\User;
use App\Profile;
use App\VerifyUser;
use App\Investment;
use App\ReferralList;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegistrationController extends Controller
{
    
    
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    
    
   public function regnew($referral_code)
    {
        
        $referrer = User::whereReferralCode($referral_code)->first();
        
        if(!empty($referrer->referral_code))
        {
            return view('Users.register')->with('referrer', $referrer);
        }
        return redirect('/register');
    }
    
    
    
    protected function registerRef(Request $request, $referral_code)
    {
        $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        
        $avatar = 'public/avatar/avatar.png';
        
        $referrer = User::whereReferralCode($referral_code)->first();
            
        $referral_code = Keygen::alphanum(17)->generate();
        
        while (User::whereReferralCode($referral_code)->count() > 0) {
            $referral_code = Keygen::alphanum(17)->generate();
        }
        
        
        
        if(!empty($referrer->referral_code))
        {
                $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'referrer_code' => $referrer->referral_code,
                'referrer_email' => $referrer->email,
                'referral_code' => $referral_code
            ]);
     
            $verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => str_random(40)
            ]);
     
            Profile::create(['user_id' => $user->id,
                            'wallet_balance' => 0.00,
                            'avatar' => $avatar]);
            Nok::create(['user_id' => $user->id,
                            'avatar' => $avatar]);
            
            if(Mail::to($user->email)->send(new VerifyMail($user)) === TRUE)
            {
                return redirect('/login')->with('warning', 'We sent you an activation code. Check your email and click on the link to verify.');
            }else{
               return redirect('/login')->with('danger', 'We sent you an activation code. Check your email and click on the link to verify.');
            }
        }else{
            return redirect('/register');
        }
    }
}
