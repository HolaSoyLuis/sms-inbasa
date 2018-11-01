<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Curso;
use App\Grado;
use App\Empleado;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Index para modulo admin
    public function index()
    {        
        $cursos = Curso::all();
        return view('admin/cursos/cursos')->with(compact('cursos'));        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Index para modulo docente
    public function indexD()
    {
        return view('docentes/cursos/cursos');
    }

    //Vista de cursos de un estudiante
    public function indexES(){
        return view('estudiante/cursos/cursos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grado::all();  
        $empleados = Empleado::all();
        return view('admin/cursos/create')->with(compact('grados','empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $cursos = Curso::create($request->all());
          return redirect()->route('cursos.index',$cursos->id)
            ->with('info', 'Curso creado con Exito');
         
        return redirect('admin/curso/curso');
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
