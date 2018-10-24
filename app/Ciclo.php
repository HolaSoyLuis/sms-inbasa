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

    public function bloques(){//Un ciclo tiene muchos bloques (4 bloques o unidades)
        return $this->hasMany(Bloque::class);
    }

    public function asignaciones(){//Un ciclo tiene muchas asignaciones(inscripciones)
        return $this->hasMany(Asignacion::class);
    }
}
