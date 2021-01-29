<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

    }

    public function index()
    {
        return view('dashboard');
    }

    public function postContact(Request $request)
    {
        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'emails' => 'required|emails|between:5,50',
            'telefone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new ContactMail($fields));
        return view('contact');
    }
}
