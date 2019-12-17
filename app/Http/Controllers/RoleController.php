<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::all();
        return view('Fontadmin.role.index',compact('roles'));
    }

    public function create()
    {

       return view('Fontadmin.role.create');
    }

    public function store(Request $request)
    {
        $role= new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;

        $role->save();

        return redirect('/admin/role')->with('success','role created');

    }

    public function edit($id)
    {
        $role =Role::find($id);
         return view('Fontadmin.role.edit',compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role=Role::find($id);
        $role->name=$request->name;
        $role->display_name=$request->display_name;
        $role->description=$request->description;
        $role->save();
        return redirect()->route('role.index')->with('success','role Updated');
    }

    public function destroy($id)
    {

        $roleDelete = Role::find($id);
        $roleDelete ->delete();
        return back()->with('success','Role Deleted');

    }
}
