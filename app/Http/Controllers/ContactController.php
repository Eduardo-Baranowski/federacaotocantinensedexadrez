<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }
    function send(Request $request){
        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'email' => 'required|email|between:5,50',
            'telefone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new ContactMail($fields));
        return view('contact');
    }
}
