<?php


namespace App\Http\Controllers;

use App\Classes\Composicao;
use Illuminate\Http\Request;

class ComposicaoController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $composicoes = Composicao::all();
        return view('pages.composicao', compact('composicoes'));
    }

    public function storecomposicao(Request $request)
    {
        $request->validate([
            'autor' => 'required|max:255',
            'ano' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $composicao = new Composicao();

        $composicao->fill($request->input());
        $composicao->save();

        return redirect()->route('pages.composicao');
    }

    public function edit($id)
    {
        $composicao = Composicao::find($id);

        return view('pages.edit', compact('composicao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Composicao  $composicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'autor' => 'required|max:255',
            'ano' => 'required|max:255',
            'descricao' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $composicao = Composicao::firstOrFail($id);
        $composicao->fill($request->input());
        $composicao->save();

        return redirect()->route('pages.composicao');
    }

    public function delete(Composicao $composicao){

        $composicao->delete();

        return redirect()->route('pages.composicao');
    }
}
