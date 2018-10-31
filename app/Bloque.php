<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    protected $table = 'bloques';

    protected $fillable = [
        'bloque', 
        'ciclo_id', 
    ];

    public function detalle_notas(){//Un bloque tiene muchos detalles de notas(nota de cada aspecto)
        return $this->hasMany(DetalleNota::class);
    }

    public function ciclos(){//Un bloque puede estar en muchos ciclos
        return $this->belongsToMany(Ciclo::class, 'bloque_ciclo', 'bloque_id', 'ciclo_id');
    }
}
