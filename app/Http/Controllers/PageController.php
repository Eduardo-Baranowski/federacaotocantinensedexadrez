<?php

namespace App\Http\Controllers;

use App\Classes\VencedorSemana;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //User::where("eduardobaranowski@gmail.com", Auth::user()->email)->get();
        return view('pages.show', compact('vencedor_semanas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'descricao' => 'required|max:800',
        ]);

        $vencedor = new VencedorSemana();

        $vencedor->fill($request->input());
        $vencedor->save();

        return redirect()->route('pages.show');
    }

    public function icons()
    {
        return view('pages.icons');
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
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
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

        return view('pages.edit', compact('vencedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VencedorSemana  $vencedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'texto' => 'required',
            'descricao' => 'required|max:800',
        ]);

        $vencedor = VencedorSemana::find($id);
        $vencedor->fill($request->input());
        $vencedor->save();

        return redirect()->route('pages.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VencedorSemana  $vencedor
     * @return \Illuminate\Http\Response
     */
    public function delete(VencedorSemana $vencedor){

        $vencedor->delete();

        return redirect()->route('pages.show');
    }
}
