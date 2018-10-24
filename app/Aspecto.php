<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspecto extends Model
{
    protected $table = 'aspectos';
    
    protected $fillable = [
        'aspecto', 
        'nota_minimo',   
        'nota_maxima',
    ];

    public function detalle_notas(){//Un aspecto (actitudinal, declarativo, procedimental,etc) va a estar en un solo detalle
        return $this->hasMany(DetalleNota::class);
    }
}
