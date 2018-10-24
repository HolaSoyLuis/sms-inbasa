<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grados';

    protected $fillable = [
        'grado', 
        'jornada_id', 
    ];
    
    public function jornada(){//Un grado solo tendrá una jornada
        return $this->belongsTo(Jornada::class);
    }

    public function secciones(){//Un grado tiene muchas secciones
        return $this->hasMany(Seccion::class);
    }

    public function asignaciones(){//Un grado tiene muchas asignaciones
        return $this->hasMany(Asignacion::class);
    }

    public function cursos(){//Un grado tiene muchos cursos
        return $this->hasMany(Curso::class);
    }
}