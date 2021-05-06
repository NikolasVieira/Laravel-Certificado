<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model
{
    protected $fillable = [
        'Id_escola',
        'tema',
        'palestrante',
        'periodo',
        'cidade', 
        'horas'
    ];
}
