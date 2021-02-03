<?php


namespace App\Http\Controllers;

use App\Classes\Partida;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $partidas = Partida::all();
        return view('pages.partida', compact('partidas'));
    }

    public function storepartida(Request $request)
    {
        $request->validate([
            'brancas' => 'required|max:255',
            'elobrancas' => 'required|max:255',
            'negras' => 'required|max:255',
            'elonegras' => 'required|max:255',
            'evento' => 'required|max:255',
            'data' => 'required|max:255',
            'link' => 'required|max:255',
            'resultado' => 'required|max:255',
        ]);

        $partida = new Partida();

        $partida->fill($request->input());
        $partida->save();

        return redirect()->route('dashboard');
    }
}
