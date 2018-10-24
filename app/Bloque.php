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

    public function ciclo(){//Un bloque le pertenece a un solo ciclo
        return $this->belongsTo(Ciclo::class);
    }
}
