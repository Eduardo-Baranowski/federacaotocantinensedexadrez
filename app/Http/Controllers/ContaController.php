<?php


namespace App\Http\Controllers;

use App\Classes\Conta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContaController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $contas = Conta::all();
        return view('pages.conta', compact('contas'));
    }

    public function storeconta(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required|max:255',
            'valor' => ['required','regex:/^\d+([.]\d{1,2})?$/'],
            'data' => 'required|max:255',
        ]);

        $conta = new Conta();

        $conta->fill($request->input());
        $conta->save();

        return redirect()->route('transparencia');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conta  $Conta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conta = Conta::find($id);

        return view('pages.edit', compact('conta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required|max:255',
            'valor' => 'required',
        ]);

        $conta = Conta::find($id);
        $conta->fill($request->input());
        $conta->save();

        return redirect()->route('pages.conta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function delete(Conta $conta){

        $conta->delete();

        return redirect()->route('pages.conta');
    }
}
