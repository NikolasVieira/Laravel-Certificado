<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\PostDec;

class Escola extends Model
{
    protected $table = 'escolas';
    protected $fillable = [
        'nome_escola',
        'responsavel',
        'funcao_resp'
    ];

    public function palestras() {
        return $this->hasMany(Palestra::class, 'escola_id', 'id');
    }
}
