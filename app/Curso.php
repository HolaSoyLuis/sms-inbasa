<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Variables para el estado de los cursos
    const ACTIVO=1;
    const INACTIVO=2;
}
