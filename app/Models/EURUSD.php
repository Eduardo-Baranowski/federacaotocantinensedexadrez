<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EURUSD extends Model
{
    protected $fillable = ['idMedia', 'ma5', 'ma10', 'ma20', 'ma50', 'ma100', 'ma200', 'paridade', 'time'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'EURUSD';
}
