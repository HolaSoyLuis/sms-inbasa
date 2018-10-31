<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    protected $table = 'ciclos';

    protected $fillable = [
        'fecha_inicio', 
        'fecha_fin', 
    ];

    public function bloques(){//Un ciclo va a estar en muchos bloques (4 bloques o unidades)
        return $this->belongsToMany(Bloque::class, 'bloque_ciclo', 'ciclo_id', 'bloque_id');
    }

    public function asignaciones(){//Un ciclo tiene muchas asignaciones(inscripciones)
        return $this->hasMany(Asignacion::class);
    }

    public function asistencias(){//Un ciclo escolar va a tener muchas asistencias
        return $this->hasMany(Asistencia::class);
    }
}
