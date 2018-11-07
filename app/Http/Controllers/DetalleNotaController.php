<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleNota;
use App\TipoEvaluacion;
use App\Estudiante;
use App\Curso;
use App\Nota;

class DetalleNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = DetalleNota::all();
        return view('docentes/notas/detalle_nota', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoEvaluaciones = TipoEvaluacion::all();
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        $notas = Nota::all();
        return view("docentes/notas/detalle_nota_create")->with(compact('estudiantes','cursos','tipoEvaluaciones','notas')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $detallenotas = new DetalleNota();
        $detallenotas->nota = $request->input('nota');
        $detallenotas->nota_id = $request->input('nota_id');
        $detallenotas->tipo_evaluacion_id = $request->input('tipo_evaluacion_id'); 
        $detallenotas->estudiante_id = $request->input('estudiante_id'); 
        $detallenotas->curso_id = $request->input('curso_id'); 
       

         $detallenotas->save();
         return redirect('/detalle_nota')->with('success', 'detalle de nota almacenada :D');
          

        
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
    }
}
