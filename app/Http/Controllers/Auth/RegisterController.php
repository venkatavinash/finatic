<?php

namespace App\Http\Controllers\Auth;

use App\Firm;
use App\Mail\VerifyMail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'account' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'token' => $this->generateToken()
        ]);

        if($data['account'] == 1){
            $user->assignRole('firm');
        } else {
            $user->assignRole('RE account');
        }
        $firm = Firm::create(['user_id'=> $user->id,'firstname'=> $user->name]);

        Mail::to($user->email)->queue(new VerifyMail($user));
        return $user;
    }

    protected function generateToken()
    {
        return hash_hmac('sha256', Str::random(40), config('app.key'));
    }

    public function verifyUser($token)
    {
        $user = User::where('token', $token)->first();
        if(isset($user->token) ){
            if(!$user->verified) {
                $user->verified = 1;
                $user->save();
                $msg = "Your e-mail is verified. You can now login.";
            }else{
                $msg = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('alert-warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('alert-success', $msg);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('alert-success', 'We have sent you an activation code. Check your email and click on the link to verify.');
    }

}
