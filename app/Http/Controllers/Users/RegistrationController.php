<?php

namespace App\Http\Controllers\Users;

use Mail;
use Keygen;
use App\Nok;
use App\User;
use App\Profile;
use App\VerifyUser;
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
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'referrer_email' => 'nullable|string'
        ]);
    }
    
    
    
    
    
    
    
    
    
   public function regnew($referral_code)
    {
        
        $referrer = User::whereReferralCode($referral_code)->first();
        
        if($referrer->referral_code != null)
        {
            return view('Users.register')->with('referrer', $referrer);
        }
        return redirect('/register');
    }
    
    
    
    
    protected function registerRef(array $data, $referral_code)
    {
        
        $avatar = 'public/avatar/avatar.png';
        
        $referrer = User::whereReferralCode($referral_code)->first();
        
            $ref_code = $referrer->referral_code;
            
        $referral_code = Keygen::alphanum(17)->generate();
        
        while (User::whereId($referral_code)->count() > 0) {
            $referral_code = Keygen::alphanum(17)->generate();
        }
        
        //TODO please back here and complete this stuff
        
        $ref_id = $referrer->id;
        
        $refers_code = $referrer->referrer_email;
        
        if($refers_code)
            $sec_referrer = User::whereEmail($refers_code)->first();
        else
            $sec_referrer = null;
        
        
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
                        'avatar' => $avatar]);
        Nok::create(['user_id' => $user->id,
                        'avatar' => $avatar]);;
                        
        if($data['referrer_email'] != '')
        {
            ReferralList::create([
                'depositors_id' => $user->id,
                'ref_id' => $ref_id,
                'referrer_email' => $data['referrer_email'],
                'referrer_code' => $referral_code,
                'referrer_generation' => 1,
                
                ]);
        }
        
        $sec_ref_code = $sec_referrer->referral_code;
        
        $sec_ref_email = $sec_referrer->referrer_email;
        
        $sec_ref_id = $sec_referrer->id;
        
        if($sec_ref_email != '')
        {
            ReferralList::create([
                'depositors_id' => $user->id,
                'ref_id' => $sec_ref_id,
                'referrer_email' => $sec_ref_email,
                'referrer_code' => $sec_ref_code,
                'referrer_generation' => 2,
                
                ]);
        }
 
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
