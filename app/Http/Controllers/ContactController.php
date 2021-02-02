<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }
    public function send(Request $request){
        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'email' => 'required|email|between:5,50',
            'telefone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('tocantinsftx@gmail.com')->send(new ContactMail($fields));
        return view('contact');
    }
    public function getDownload(){

        $file= public_path(). "/black/pdf/Estatuto.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'estatutoftx.pdf', $headers);
    }
    public function viewEstatuto(){

        $file= public_path(). "/black/pdf/Estatuto.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->file($file, $headers);
    }
}
