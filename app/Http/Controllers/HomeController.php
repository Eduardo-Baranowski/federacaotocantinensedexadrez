<?php

namespace App\Http\Controllers;
use App\Classes\Partida;
use App\Classes\VencedorSemana;
use Response;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $partidas = Partida::all();
        return view('dashboard', compact('partidas'));
    }


}
