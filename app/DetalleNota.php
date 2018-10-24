<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleNota extends Model
{
    protected $table = 'detalle_notas';

    protected $fillable = [
        'nota', 
        'nota_id',   
        'aspecto_id',
        'tipo_evaluacion_id', 
        'bloque_id',   
        'estudiante_id',
        'curso_id',
    ];

    public function tipo_evaluacion(){//Un detalle de nota le pertenece a un tipo de evaluación
        return $this->belongsTo(TipoEvaluacion::class);
    }

    public function aspecto(){//Un detalle de nota tiene únicamente un aspecto a calificar
        return $this->belongsTo(Aspecto::class);
    }

    public function nota(){//Un detalle le pertenece a una sola nota(total)
        return $this->belongsTo(Nota::class);
    }

    public function bloque(){//Un detalle le pertenece a un solo bloque
        return $this->belongsTo(Bloque::class);
    }

    public function estudiante(){//Un detalle le pertenece a un solo estudiante
        return $this->belongsTo(Estudiante::class);
    }

    public function curso(){//Un detalle le pertenece a un solo curso
        return $this->belongsTo(Curso::class);
    }
}
