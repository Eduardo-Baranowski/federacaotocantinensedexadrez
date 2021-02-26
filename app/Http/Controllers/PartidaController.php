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
            'pgn' => 'required',
        ]);

        $partida = new Partida();

        $partida->fill($request->input());
        $partida->save();

        return redirect()->route('pages.partida');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partida = Partida::find($id);

        return view('pages.partida', compact('partida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'brancas' => 'required|max:255',
            'elobrancas' => 'required|max:255',
            'negras' => 'required|max:255',
            'elonegras' => 'required|max:255',
            'evento' => 'required|max:255',
            'data' => 'required|max:255',
            'link' => 'required|max:255',
            'pgn' => 'required',
        ]);

        $partida = Partida::find($id);
        $partida->fill($request->input());
        $partida->save();

        return redirect()->route('pages.partida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partida  $partida
     * @return \Illuminate\Http\Response
     */
    public function delete(Partida $partida){

        $partida->delete();

        return redirect()->route('pages.partida');
    }
}
