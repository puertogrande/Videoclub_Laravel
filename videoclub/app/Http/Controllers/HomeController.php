<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
    public function index()
    {
        echo "ahora estamos en home controller index";
         //return view('home');
        $controller = new catalogController;
        $controller->index();
        
    }

    public function enlaces($id){
        echo "he recibido el id";
         //return view('home');
        echo $id; 
    }
}
