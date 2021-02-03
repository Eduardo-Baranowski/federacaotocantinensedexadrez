<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    public $fillable = [
        'brancas',
        'elobrancas',
        'negras',
        'elonegras',
        'evento',
        'data',
        'resultado',
        'link',
        'resultado',
    ];
}
