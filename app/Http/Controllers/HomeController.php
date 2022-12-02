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
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return redirect('/');
        

        //return view('home' );
    }

    public function home()
    {

        $inveservis = \DB::table('inveservis')->inRandomOrder()->get();

        return view('welcome')->with([
            'inveservis' => $inveservis,
        ]);       
    }






    //////CURSOS MIDELWERE///////

    public function ISeminarioVirtualEnDerecho(){
        $this->middleware('auth');
        return view('cursos/ISeminarioVirtualEnDerecho');
    }

    public function IISeminarioVirtualEnDerecho(){
        $this->middleware('auth');
        return view('cursos/IISeminarioVirtualEnDerecho');
    }



}
