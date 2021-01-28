<?php

namespace App\Http\Controllers;

use App\Models\EURUSD;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class EURUSDController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }
}
