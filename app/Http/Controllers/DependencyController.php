<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Project;
use App\Category;
use App\Product;
use App\Country;
use App\State;
use App\City;
use Cart;
use App\User;
use Hash;



class DependencyController extends Controller
{

    public function dependencyIndex(){
        $user=  Auth::user();
        $countryname = Country::all();

        return view('Frontend.homeContent',compact('countryname','user'));
    }

    public function getcategory(Request $request){
        $data = Category::select('categoryName','id')->where('project_id',$request->project_id)->get();
        return response()->json($data);
    }
    public function getproduct(Request $request){
        $products = Product::select('productName','price','qty','qtyneed','qtyreceived','images','id')->where('catagoryId',$request->catagoryId)->get();
        return view('Frontend.test',compact('products'));
    }

    public function getstate(Request $request){
        $data = State::select('name','id')->where('country_id',$request->country_id)->get();
        return response()->json($data);
    }

    public function getcity(Request $request){
        $data = City::select('name','id')->where('state_id',$request->state_id)->get();
        return response()->json($data);
    }

    public function getcart(Request $request){

        return 'its work'. $request->fristname;
    }

    public function userreg(Request $request){

        $users = new User;
        $users->frist_name = $request->fristname??"";
        $users->last_name = $request->lastname??"";
        $users->email = $request->email??"";
        $users->country = $request->dropdowncountry??"";
        $users->address = $request->address??"";
        $users->city = $request->city??"";
        $users->state = $request->state??"";
        $users->postal_code =$request->zip??"";
        $users->Phone = $request->phone??"";
        $users->password = Hash::make($request->password);
        $users->save();
        return response()->json($users) ;
    }
    
    public function email_available(Request $request){
        if($request->email)
        {
            $email = $request->get('email');
            $data=User::where('email', $email)->count();
            // $data = DB::table("users")->where('email', $email)->count();
            if($data > 0)
            {
                return response()->json('not_unique');
            }
            else
            {
                return response()->json('unique');
            }
        }
    }



}
