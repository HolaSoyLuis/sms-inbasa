<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = [
        'p_nombre', 
        's_nombre', 
        'p_apellido',
        's_apellido', 
        'genero', 
        'fecha_nac',
        'lugar_nac', 
        'estado_civil',
        'direccion', 
        'inicio_labores',
        'cui', 
        'telefono',
        'correo', 
        'foto',
        'estado', 
        'usuario_id',
        'cargo_id', 
        'centro_id',
    ];

    //Variables para el estado del empleado
    const ACTIVO=1;
    const INACTIVO=2;
    const RETIRADO=3;
    const SUSPENDIDO=4;

    // Relaciones con los modelos
    public function usuario(){//Un empleado tiene asignado un solo usuario
    	return $this->belongsTo(User::class);
    }

    public function cargo(){//Un empleado tiene asignado un solo cargo
    	return $this->belongsTo(Cargo::class);
    }

    public function centro(){//Un empleado pertenece a un solo centro educativo
    	return $this->belongsTo(Centro::class);
    }

    public function cursos(){//Un empleado puede impartir muchos cursos
    	return $this->hasMany(Curso::class);
    }

    public function comprobantes(){//Un empleado puede extender muchos comprobantes
    	return $this->hasMany(Comprobante::class);
    }
}
