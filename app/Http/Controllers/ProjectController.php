<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index(){

        return view('Fontadmin.Project.projectentry');
    }

    public function save(Request $request){
         //dd($request->all());
         $projectEntry = new Project();
         $projectEntry ->   projectName   = $request -> ProjectName;
         $projectEntry ->   Description   = $request -> projectdescription;

         $projectEntry ->save();

         return redirect('admin/project/entry');
    }
}
