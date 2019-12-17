<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;
use App\Product;

class CategoryController extends Controller
{
    public function index(){
        // $projects = Project::all();
        return view('Fontadmin.category.categoryEntry');
    }

    public function save(Request $request){

        // dd($request->all());
         $categoryEntry = new Category();
         $categoryEntry -> categoryName = $request -> categoryName;
         $categoryEntry -> shortDescription = $request -> CategoryDescription;
         $categoryEntry -> project_id = $request -> project_id;
         $categoryEntry ->save();

        return redirect('admin/category/entry');
    }

    public function products()
    {
        return $this->hasMany('Product');
    }
}
