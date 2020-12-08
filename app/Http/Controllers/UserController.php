<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return \View::make('users/list',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return \View::make('users/update', compact('users'));
    }

    public function update($id, Request $request){
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('users');
    }

    public function show(Request $request){
        $users = User::where('name', 'like','%'.$request->name.'%')->get();
        return \View::make('users/list', compact('users'));
    }

    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }

    public function create()
    {
        return \View::make('users/new');
    }

    public function store(Request $request)
    {
        $users = new User;
        $users->create($request->all());
        return redirect('users');
    }
}
