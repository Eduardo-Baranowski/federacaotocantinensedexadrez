<?php

namespace App\Http\Controllers;

use App\Classes\VencedorSemana;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $vencedor_semanas = VencedorSemana::all();
        return view('vencedor.show', compact('vencedor_semanas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'descricao' => 'required|max:800',
            //'imagem' => 'required',
        ]);

        $vencedor = new VencedorSemana();

        $vencedor->fill($request->input());
        $vencedor->save();


        if ($request->file('imagem') && $request->file('imagem')->isValid()) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $request->file('imagem')->extension();
            // Define o nome
            $nameFile = "{$name}.{$extension}";
            // Faz o upload:
            $upload = $request->file('imagem')->storeAs('imagem', $nameFile);
            //Armazena o caminho onde a imagem está
            $vencedor->imagem = $upload;
            $vencedor->save();
        }

        return redirect()->route('vencedor.show');
    }

    public function icons()
    {
        return view('vencedor.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VencedorSemana  $vencedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vencedor = VencedorSemana::find($id);

        return view('vencedor.editvencedor', compact('vencedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VencedorSemana  $vencedor
     * @return \Illuminate\Http\Response
     */
    public function updatev(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'descricao' => 'required|max:800',
        ]);

        $vencedor = VencedorSemana::find($id);
        $vencedor->fill($request->input());
        $vencedor->save();

        if ($request->file('imagem') && $request->file('imagem')->isValid()) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
            // Recupera a extensão do arquivo
            $extension = $request->file('imagem')->extension();
            // Define o nome
            $nameFile = "{$name}.{$extension}";
            // Faz o upload:
            $upload = $request->file('imagem')->storeAs('imagem', $nameFile);
            //Armazena o caminho onde a imagem está
            $vencedor->imagem = $upload;
            $vencedor->save();
        }

        return redirect()->route('vencedor.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes\VencedorSemana  $vencedor
     * @return \Illuminate\Http\Response
     */
    public function delete(VencedorSemana $vencedor){

        Storage::delete($vencedor->imagem);
        $vencedor->delete();


        return redirect()->route('vencedor.show');
    }
}
