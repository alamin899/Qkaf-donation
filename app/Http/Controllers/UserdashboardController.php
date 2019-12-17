<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

use Auth;

class UserdashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $user=  Auth::user();
        return view('Frontend.userdashboard.userDashboard',compact('user'));

    }
    public function profile(){
        $user=  Auth::user();
        return view('Frontend.userdashboard.userProfile',compact('user'));
    }

    public function profileUpdate(Request $request){

        $user = User::all();

        $this->validate($request,[
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users','email' , . 'Auth::user()->id'],
            // 'frist_name' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            // 'country' => [ 'string', 'max:255'],
            // 'address' => [ 'string', 'max:255'],
            // 'city' => [ 'string', 'max:255'],
            // 'state' => [ 'string', 'max:255'],
            // 'state' => ['string', 'max:255'],
            // 'Phone' => [ 'string', 'max:255','Phone', . 'Auth::user()->id'],
            // 'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'country' => 'required|max:191',
            'address' => 'required|max:191',
            'city' => 'required|max:191',
            'state' => 'required|max:191',
            'Phone' => 'required|max:15|unique:users,Phone,'.$user->id,
        ]);



        $user->frist_name = $request->frist_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->postal_code = $request->postal_code;
        $user->Phone = $request->Phone;
        if
        ($request->password != NULL || $request->password != "")
        {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return view('Frontend.userdashboard.userDashboard');
       session()->flash('success', 'User profile Update Successfully');

    }
}
