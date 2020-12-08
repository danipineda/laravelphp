<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories as Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return \View::make('categories/list',compact('categories'));
    }

    public function edit($id){
        $categories = Categories::find($id);
        return \View::make('categories/update', compact('categories'));
    }

    public function update($id, Request $request){
        $categories = Categories::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect('categories');
    }

    public function show(Request $request){
        $categories = Categories::where('name', 'like','%'.$request->name.'%')->get();
        return \View::make('categories/list', compact('categories'));
    }

    public function destroy($id){
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->back();
    }

    public function create()
    {
        return \View::make('categories/new');
    }

    public function store(Request $request)
    {
        $categories = new Categories;
        $categories->create($request->all());
        return redirect('categories');
    }
}
