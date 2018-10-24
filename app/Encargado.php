<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $table = 'encargados';
    
    protected $fillable = [
        'p_nombre', 
        's_nombre', 
        'p_apellido', 
        's_apellido', 
        'genero', 
        'fecha_nac', 
        'direccion', 
        'telefono', 
        'cui', 
        'foto', 
        'usuario_id', 
    ];

    // Relaciones con los modelos
    public function usuario(){//Un encargado tiene asignado un solo usuario
    	return $this->belongsTo(User::class);
    }
    
    public function encargado_estudiantes(){//Un encargado puede tener muchos estudiantes a cargo
        return $this->hasMany(EncargadoEstudiante::class);
    }

    public function comprobantes(){//Un encargado tiene muchos comprobantes de pago
        return $this->hasMany(Comprobante::class);
    }
}
