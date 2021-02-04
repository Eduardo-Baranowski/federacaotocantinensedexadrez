<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public $fillable = [
        'titulo',
        'descricao',
        'valor',
    ];
}
