<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asignacion;
use App\Estudiante;
use App\Grado;
use App\Ciclo;
use App\Seccion;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaciones = Asignacion::all();
        $estudiantes = Estudiante::all();
        $grados = Grado::all();
        $ciclos = Ciclo::all();
        $secciones = Seccion::all();
        return view('asignacion.index', compact('asignaciones', 'estudiantes', 'grados', 'ciclos', 'secciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estudiantes = Estudiante::all();
        $grados = Grado::all();
        $ciclos = Ciclo::all();
        $secciones = Seccion::all();
        return view('asignacion.create')->with(compact('estudiantes', 'grados', 'ciclos', 'secciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fecha_asignacion'=> 'required',
            'nuevo_reingreso'=> 'required',
            'certificado' => 'required',
            'clave_estudiante'=> 'required|integer',
            'estudiante_id'=> 'required',
            'ciclo_id'=> 'required',
            'grado_id'=> 'required',
            'seccion_id'=> 'required'
          ]);
          $asignacion = new Asignacion([
            'fecha_asignacion'=> $request->get('fecha_asignacion'),
            'nuevo_reingreso'=> $request->get('nuevo_reingreso'),
            'certificado' => $request->get('certificado'),
            'clave_estudiante'=> $request->get('clave_estudiante'),
            'estudiante_id'=> $request->get('estudiante_id'),
            'ciclo_id'=> $request->get('ciclo_id'),
            'grado_id'=> $request->get('grado_id'),
            'seccion_id'=> $request->get('seccion_id')
          ]);
          $asignacion->save();
          return redirect('/asignacion')->with('success', 'Asignacion guardada :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $asignacion = Asignacion::find($id);

        return view('asignacion.edit', compact('asignacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'fecha_asignacion'=>'required',
            'nuevo_reingreso'=> 'required',
            'certificado' => 'required',
            'clave_estudiante'=> 'required|integer',
            'estudiante_id'=> 'required',
            'ciclo_id'=> 'required',
            'grado_id'=> 'required',
            'seccion_id'=> 'required'
        ]);
        $asignacion = Asignacion::find($id);
        $asignacion->fecha_asignacion = $request->get('fecha_asignacion');
        $asignacion->nuevo_reingreso = $request->get('nuevo_reingreso');
        $asignacion->certificado = $request->get('certificado');
        $asignacion->clave_estudiante = $request->get('clave_estudiante');
        $asignacion->estudiante_id = $request->get('estudiante_id');
        $asignacion->ciclo_id = $request->get('ciclo_id');
        $asignacion->grado_id = $request->get('grado_id');
        $asignacion->seccion_id = $request->get('seccion_id');

        $encargado->save();
        return redirect('/asignacion')->with('success', 'Asignacion actualizada :D');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $asignacion = Asignacion::find($id);
        $asignacion->delete();

        return redirect('/asignacion')->with('success', 'Asignacion eliminada');
    }
}
