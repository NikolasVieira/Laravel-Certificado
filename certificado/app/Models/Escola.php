<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = [
        'nome_escola',
        'responsavel',
        'funcao_resp'
    ];
}
