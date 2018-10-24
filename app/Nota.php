<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    
    protected $fillable = [
        'total_bloque', 
        'detalles',
        'asignacion_id',
    ];

    public function detalle_notas(){//Una nota tendrá muchos detalles(notas parciales 1 nota por cada aspecto)
        return $this->hasMany(DetalleNota::class);
    }

    public function asignacion(){//Una nota tendrá una única asignación
        return $this->belongsTo(Asignacion::class);
    }
}
