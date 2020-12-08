<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuses as Statuses;

class StatusesController extends Controller
{
    public function index()
    {
        $statuses = Statuses::all();
        return \View::make('statuses/list',compact('statuses'));
    }

    public function edit($id){
        $statuses = Statuses::find($id);
        return \View::make('statuses/update', compact('statuses'));
    }

    public function update($id, Request $request){
        $statuses = Statuses::find($id);
        $statuses->name = $request->name;
        $statuses->save();
        return redirect('statuses');
    }

    public function show(Request $request){
        $statuses = Statuses::where('name', 'like','%'.$request->name.'%')->get();
        return \View::make('statuses/list', compact('statuses'));
    }

    public function destroy($id){
        $statuses = Statuses::find($id);
        $statuses->delete();
        return redirect()->back();
    }

    public function create()
    {
        return \View::make('statuses/new');
    }

    public function store(Request $request)
    {
        $statuses = new Statuses;
        $statuses->create($request->all());
        return redirect('statuses');
    }
}
