<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
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
    protected $redirectTo = '/';

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
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'frist_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'country' => [ 'string', 'max:255'],
            'address' => [ 'string', 'max:255'],
            'city' => [ 'string', 'max:255'],
            'state' => [ 'string', 'max:255'],
            'postal_code' => ['string', 'max:255'],
            'Phone' => [ 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $user =  User::create([
            'email' => $request->email,
            'frist_name' => $request->frist_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' =>$request->postal_code,
            'Phone' => $request->Phone,
            'role_id' => 0,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        // $user->save();
        return redirect('/')->with('message','registered successsfully');
    }

//    public function adminregister(Request $request)
//    {
//        $user = new  User;
//        $user->email = $request->email;
//        $user->role_id = $request->role_id;
//        $user->frist_name = $request->frist_name;
//        $user->last_name = $request->last_name;
//        $user->country = $request->country;
//        $user->address = $request->address;
//        $user->city = $request->city;
//        $user->state = $request->state;
//        $user->postal_code = $request->postal_code;
//        $user->Phone = $request->Phone;
//        $user->password =Hash::make($request->password);
//        $user->last_login_ip = $request->getClientIp();
//        $user->save();
//
//
//        return redirect('/adminlogin')->with('message','registered successsfully');
//    }
}
