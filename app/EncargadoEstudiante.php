<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoEstudiante extends Model
{
    protected $table = 'encargado_estudiantes';

    protected $fillable = [
        'parentesco', 
        'encargado_id', 
        'estudiante_id',
    ];

    public function encargado(){
        return $this->belongsTo(Encargado::class);
    }

    public function estudiante(){//Muchos estudiantes pueden tener a muchos encargados
        return $this->belongsTo(Estudiante::class);
    }

}
