<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\MyCart;

class CartController extends Controller
{
    public function index(){
      $cart = Cart::content();
      return view('Frontend.showCart',compact('cart'));
    }

    public function additem(Request $request ,$id ){
      $pro =  Product::find($id);
      $cart = Cart::add([
        'id' => $pro->id,
        'name' => $pro->productName,
        'qty' =>$request->quantity ,
        'price' => $pro->price,
        'weight' => 550,
        'options' =>[
            'images' => $pro->images
          ]]);
        // return response()->json($cart);
        return back()->with('success', 'Cart Item Added');

    }

    public function remaovecartitem($id){
      Cart::remove($id);
    //   return back();
    }

}
