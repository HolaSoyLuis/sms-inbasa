<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    
    protected $fillable = [
        'codigo', 
        'nombre', 
        'descripcion', 
        'estado', 
        'grado_id', 
        'docente_id',  
    ];

    //Variables para el estado de los cursos
    const ACTIVO=1;
    const INACTIVO=2;

    public function empleado(){//Un curso lo imparte un solo empleado(docente)
        return $this->belongsTo(Empleado::class);
    }

    public function detalle_horarios(){//Un curso puede tener varios horarios (horario en sección 'A' otro en la sección  'B',etc)
        return $this->hasMany(DetalleHorario::class);
    }

    public function grado(){//Un curso se imparte un solo grado
        return $this->belongsTo(Grado::class);
    }

    public function detalle_notas(){//Un curso va a registrarse en muchos detalles de notas
        return $this->hasMany(DetalleNota::class);
    }
}
