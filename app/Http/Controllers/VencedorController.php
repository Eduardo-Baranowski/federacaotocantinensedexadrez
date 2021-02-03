<?php

namespace App\Http\Controllers;

use App\Classes\VencedorSemana;
use Illuminate\Http\Request;

class VencedorController extends Controller
{
    public function __construct()
    {
        //O código abaixo é para permitir somente a entrada em anotações de usuários logados
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = VencedorSemana::all();
        return view('pages.show', compact('notes'));
    }
}
