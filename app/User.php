<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    protected $table = 'users';

    //Variables para el estado del estudiante
    const ACTIVO=1;
    const INACTIVO=2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'password', 
        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relaciones con los modelos
    public function empleados(){//Un usuario pertenece a un empleado
    	return $this->belongsTo(Empleado::class);
    }

    public function encargados(){//Un usuario pertenece a un encargado
    	return $this->belongsTo(Encargado::class);
    }

    public function estudiantes(){//Un usuario pertenece a un estudiante
    	return $this->belongsTo(Estudiante::class);
    }

    public function backups(){//Un usuario tiene muchos backups
    	return $this->hasMany(Backup::class);
    }

    public function roles(){//Un usuario tiene muchos roles
        return $this->belongsToMany(Role::class);
    }

    public function permisos(){//Un usuario tiene muchos permisos
        return $this->belongsToMany(Permission::class);
    }
}
