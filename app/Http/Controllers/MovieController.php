<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie as Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return \View::make('movies/list',compact('movies'));
    }

    public function edit($id){
        $movie = Movie::find($id);
        return \View::make('movies/update', compact('movie'));
    }

    public function update($id, Request $request){
        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();
        return redirect('movie');
    }

    public function show(Request $request){
        $movies = Movie::where('name', 'like','%'.$request->name.'%')->get();
        return \View::make('movies/list', compact('movies'));
    }

    public function destroy($id){
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->back();
    }
    
    //Para acceder a las vistas
    public function create()
    {
        return \View::make('movies/new');
    }

    public function store(Request $request)
    {
        //Primera opción: Se guarda de uno en uno la información usando el método save()
        
       /* $movie = new Movie;
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();
        return redirect('movie');*/

        //Se envía como array asociativo
        $movie = new Movie;
        $movie->create($request->all());
        return redirect('movie');
    }

   
}
