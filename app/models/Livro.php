<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'ISBN',
        'autor_id'
    ];
}
