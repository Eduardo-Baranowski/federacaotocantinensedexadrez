<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class Composicao extends Model
{

    public $fillable = [
        'autor',
        'ano',
        'descricao',
        'link',
    ];

}
