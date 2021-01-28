<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

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
        return view('dashboard');
    }

    public function postContact(Request $request)
    {
        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'email' => 'required|email|between:5,50',
            'telefone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new ContactMail($fields));
        return view('contato');
    }
}
