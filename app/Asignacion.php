<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'fecha_asignacion', 
        'nuevo_reingreso',
        'certificado', 
        'clave_estudiante', 
        'estudiante_id', 
        'ciclo_id', 
        'grado_id', 
        'seccion_id',    
    ];

    //Variables almacenar si estudiantes es nuevo o de reingreso
    const NUEVO=1;
    const REINGRESO=2;

    public function estudiante(){//Una asignación le pertenece a un solo estudiante
        return $this->belongsTo(Estudiante::class);
    }

    public function notas(){//Una asignación tendra muchas notas (4 notas - 1 por bloque o unidad)
        return $this->hasMany(Nota::class);
    }

    public function ciclo(){//Una asignación pertenece a un solo ciclo escolar
        return $this->belongsTo(Ciclo::class);
    }

    public function grado(){//Una asignación le pertenece a un solo grado
        return $this->belongsTo(Grado::class);
    }
    
    public function seccion(){//Una asignación le pertenece a una sola sección
        return $this->belongsTo(Seccion::class);
    }

    public function comprobantes(){//Una asignación puede tener muchos detalles de comprobantes(pagos)
        return $this->hasMany(DetalleComprobante::class);
    }
}
