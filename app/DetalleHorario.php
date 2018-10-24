<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleHorario extends Model
{
    protected $table = 'detalle_horarios';
    
    protected $fillable = [
        'dia_id', 
        'horario_id', 
        'seccion_id', 
        'curso_id',  
    ];

    public function curso(){//Un detalle solo pertenece a un curso
        return $this->belongsTo(Curso::class);
    }

    public function horario(){//Un detalle solo pertenece a un horario
        return $this->belongsTo(Horario::class);
    }

    public function dia(){//Un detalle solo pertenece a un día
        return $this->belongsTo(Dia::class);
    }

    public function seccion(){//Un detalle solo pertenece a una sección
        return $this->belongsTo(Seccion::class);
    }
}
