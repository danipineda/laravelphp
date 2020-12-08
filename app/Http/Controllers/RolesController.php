<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles as Roles;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return \View::make('roles/list',compact('roles'));
    }

    public function edit($id){
        $roles = Roles::find($id);
        return \View::make('roles/update', compact('roles'));
    }

    public function update($id, Request $request){
        $roles = Roles::find($id);
        $roles->name = $request->name;
        $roles->save();
        return redirect('roles');
    }

    public function show(Request $request){
        $roles = Roles::where('name', 'like','%'.$request->name.'%')->get();
        return \View::make('roles/list', compact('roles'));
    }

    public function destroy($id){
        $roles = Roles::find($id);
        $roles->delete();
        return redirect()->back();
    }

    public function create()
    {
        return \View::make('roles/new');
    }

    public function store(Request $request)
    {
        $roles = new Roles;
        $roles->create($request->all());
        return redirect('roles');
    }
}
