<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\VerifyUser;
use Mail;
use App\Profile;
use App\ReferralList;
use Keygen;
use App\Nok;
use Session;
use App\Mail\VerifyMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    

    use RegistersUsers;


    protected $redirectTo = '/login';


    public function __construct()
    {
        $this->middleware('guest');
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'referrer_email' => 'nullable|email|exists:users|string'
        ]);
    }


    protected function create(array $data)
    {
        $avatar = 'public/avatar/avatar.png';
        
        if($data['referrer_email'] != ''){
            
            $referrer = User::whereReferrerEmail($data['referrer_email'])->first();
            $ref_code = $referrer->referral_code;
            
        }else{
            $ref_code = null;
        }
        $referral_code = Keygen::alphanum(17)->generate();
        
        while (User::whereReferralCode($referral_code)->count() > 0) {
            $referral_code = Keygen::alphanum(17)->generate();
        }
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'referrer_code' => $ref_code,
            'referrer_email' => $data['referrer_email'],
            'referral_code' => $referral_code
        ]);
 
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        
        
 
        Mail::to($user->email)->send(new VerifyMail($user));
        Profile::create(['user_id' => $user->id,
                        'wallet_balance' => 0.00,
                        'avatar' => $avatar]);
        Nok::create(['user_id' => $user->id,
                        'avatar' => $avatar]);
        return $user;
    }
    
    
    
    
    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
 
        return redirect('/login')->with('status', $status);
    }
    
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('warning', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
    
    
    
}
