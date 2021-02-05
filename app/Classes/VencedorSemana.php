<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class VencedorSemana extends Model
{
    public $fillable = [
        'titulo',
        'texto',
        'descricao',
        'imagem',
    ];
}
