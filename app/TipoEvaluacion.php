<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    protected $table = 'tipo_evaluaciones';

    protected $fillable = [
        'tipo', 
    ];

    public function detalle_notas(){//Un tipo de evaluacion (ordinaria, recuperación,etc) va a estar varios detalles de notas
        return $this->hasMany(DetalleNota::class);
    }
}