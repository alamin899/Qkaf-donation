<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use DB;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::all();
        return view('Fontadmin.Product.productentry',['catagories'=>$categories],['products'=>$products]);
    }

    public function save(Request $request){
          // dd($request->all());
        $product = new Product();
        $product->productName = $request->name;
        $product->catagoryId = $request->catagoryId;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->qtyneed = $request->qtyneed;
        $product->qtyreceived = $request->qtyreceived;
        $product->shortDescription = $request->ShortDescription;
        $product->longDescription = $request->longDescription;
        $product->images = $request->Images;

        $product->save();

        $lastId = $product->id;
        // echo $lastId;
        $Imagesinfo = $request->file('Images');
        // echo "<Pre>";
        //     print_r($Imagesinfo);
        // echo "<Pre>";
        $ImagesName = $lastId.$Imagesinfo->getClientOriginalName();
        // echo $ImagesName;
        $folder = "productImage/";
        $Imagesinfo->move($folder,$ImagesName);
        $ImagesUrl = $folder.$ImagesName;
        $productImages = Product::find($lastId);
        $productImages->Images = $ImagesUrl;
        $productImages->save();

       return redirect('admin/product/entry')->with('message','Prodsuct insert succcessfull');
    }

    public function view(Request $request){
        $products = Product::all();
        return view('Fontadmin.Product.productManage',compact('products'));
    }
    public function getproduct(Request $request){
        $data = Product::all();
        return response()->json($data);
    }
    public function cart(Request $id)
    {
        $products = Product::find($id);
        return view('Frontend.modal',['products'=>$products]);
    }
}
