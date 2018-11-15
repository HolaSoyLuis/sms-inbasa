<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;
use App\Empleado;
use App\Encargado;
use App\Estudiante;

class InicioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Para que solo se pueda acceder siendo usuario autenticado
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all()->count();
        $docentes = Empleado::where('cargo_id', '=', 2)->count();
        $encargados = Encargado::all()->count();
        $estudiantes = Estudiante::all()->count();
        return view('inicio.inicio')->with(compact('empleados', 'docentes', 'encargados', 'estudiantes'));
    }
}
