<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';
    
    protected $fillable = [
        'seccion', 
        'estado', 
        'grado_id', 
    ];

    //Variables para el estado de las seccions de grado
    const ACTIVO=1;
    const INACTIVO=2;

    public function grado(){//Una sección  pertenece a un solo graod
        return $this->belongsTo(Grado::class);
    }

    public function asignaciones(){//Una seccion tiene muchas secciones
        return $this->hasMany(Asignacion::class);
    }

    public function detalle_horarios(){//una sección puede asignarle varios horarios
        return $this->hasMany(DetalleHorario::class);
    }
}
