<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentals as Rentals;

class RentalsController extends Controller
{
    public function index()
    {
        $rentals = Rentals::all();
        return \View::make('rentals/list',compact('rentals'));
    }

    public function edit($id){
        $rentals = Rentals::find($id);
        return \View::make('rentals/update', compact('rentals'));
    }
    
    public function update($id, Request $request){
        $rentals = Rentals::find($id);
        $rentals->start_date = $request->start_date;
        $rentals->end_date = $request->end_date;
        $rentals->total = $request->total;
        $rentals->save();
        return redirect('rentals');
    }
    
    public function show(Request $request){
        $rentals = Rentals::where('created_at','>',$date)->get();
        return \View::make('rentals/list', compact('rentals'));
    }

    public function destroy($id){
        $rentals = Rentals::find($id);
        $rentals->delete();
        return redirect()->back();
    }

    public function create()
    {
        return \View::make('rentals/new');
    }

    public function store(Request $request)
    {
        $rentals = new Rentals;
        $rentals->create($request->all());
        return redirect('rentals');
    }
}
