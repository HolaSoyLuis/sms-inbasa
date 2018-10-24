<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    protected $table = 'backups';

    protected $fillable = [
        'ruta_back', 
        'usuario_id', 
    ];

    public function usuario(){//Un backup lo creó un solo usuario
        return $this->belongsTo(User::class);
    }
    
}
