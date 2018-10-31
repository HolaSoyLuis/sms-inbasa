<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencias';

    protected $fillable = [
        'inasistencias', 
        'curso_id', 
        'estudiante_id',
        'ciclo_id',
    ];

     public function ciclo(){//Una asistencia pertenece a un sólo ciclo
        return $this->belongsTo(Ciclo::class);
    }

    public function estudiante(){//Una asistencia pertenece a un sólo estudiante
        return $this->belongsTo(Estudiante::class);
    }

    public function curso(){//Una asistencia pertenece a un sólo curso
        return $this->belongsTo(Curso::class);
    }
}
