<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function userregistration(Request $request){

        $users = new User;
        $users->frist_name = $request->fristname;
        $users->last_name = $request->lastname;
        $users->email = $request->email;
        $users->country = $request->dropdowncountry;
        $users->address = $request->address;
        $users->city = $request->city;
        $users->state = $request->state;
        $users->postal_code =$request->zip;
        $users->Phone = $request->phone;
        $users->password = Hash::make($request->password);
        $insert=$users->save();
        

        if  (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            return response()->json("success");
        }
        else
            return response()->json("error");

    }

    public function customlogin(Request $request){
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
                return response()->json("success");
        }
            else
                return response()->json("error");


    }

    public function customregister(Request $request){
//        $user=DB([
//            'email' => $request->email,
//            'frist_name' => $request->frist_name,
//            'last_name' => $request->last_name,
//            'country' => $request->country,
//            'address' => $request->address,
//            'city' => $request->city,
//            'state' => $request->state,
//            'postal_code' =>$request->postal_code,
//            'Phone' => $request->Phone,
//            'role_id' => 0,
//            'password' => Hash::make($request->password),
//        ]);
////        Auth::login($user);
//        // $user->save();
//
//        return redirect('/')->with('message','registered successsfully');
        $insert=DB::table('users')->insert([
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
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/')->with('message','registered successsfully');
        }
    }


}
