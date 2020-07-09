<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Movie;

class catalogController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function borrar($id){
        $pelicula=movie::findOrFail($id);
        $pelicula->delete();
        $peliculas = movie::all();
        return view('indice',['peliculas'=>$peliculas]);
    }
    public function getShow($id){
        $pelicula=movie::findOrFail($id);
        return view('detalles',['pelicula'=>$pelicula]);
    }
    
    public function getIndex(){
        $peliculas = movie::all();
        return view('indice',['peliculas'=>$peliculas]);
    }

    public function getEdit($id){
       $pelicula=movie::findOrFail($id);
       return view('modificar_pelicula',['pelicula'=>$pelicula]);
    }
    public function alquilar($id){
        $pelicula=movie::findOrFail($id);
        $pelicula->rented =1;
        $peliculas = movie::all();
        $pelicula->save();
        return view('indice',['peliculas'=>$peliculas]);
     }
     public function devolver($id){
        $pelicula=movie::findOrFail($id);
        $pelicula->rented =0;
        $peliculas = movie::all();
        $pelicula->save();
        return view('indice',['peliculas'=>$peliculas]);
     }
    
   public function getCreate(){
        return view('introducir_pelicula');  
    }
    
    public function postCreate(Request $request){
        $pelicula=new Movie();
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis= $request->synopsis;
        $pelicula->save();
        $peliculas = movie::all();
        return view('indice',['peliculas'=>$peliculas]);
    }

    public function postEdit(Request $request){
        $id=$request->id;
        $pelicula=movie::findOrFail($id);
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis= $request->synopsis;
        $pelicula->save();
        $peliculas = movie::all();
        return view('indice',['peliculas'=>$peliculas]);
     }
  
}
