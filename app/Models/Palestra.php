<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model
{
    protected $table = 'palestras';
    protected $fillable = [
        'tema',
        'palestrante',
        'periodo',
        'cidade',
        'horas'
    ];
    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id', 'id');
    }
}
