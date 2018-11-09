<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstudianteRequest;
use App\User;
use App\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes= Estudiante::all();
        $users = User::all();
        return view('admin/estudiantes/estudiantes')->with(compact('estudiantes', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("admin/estudiantes/create")->with(compact('users'));
    }

    public function createPDF()
    {
        $estudiantes = Estudiante::all();
        $pdf = \PDF::loadView('admin/estudiantes/pdf', ['estudiantes' => $estudiantes])->setPaper('a4', 'landscape');
        return $pdf->download('Reporte Estudiantes.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteRequest $request)
    {
        $estudiantes = Estudiante::create($request->all());

        $request->session()->flash('alert-success', 'Estudiante Creado');
        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantes = Estudiante::find($id);
        $users = User::all();
        return view('admin/estudiantes/show')->with(compact('estudiantes','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes = Estudiante::find($id);
        $users = User::all();
        return view('admin/estudiantes/edit')->with(compact('estudiantes','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstudianteRequest $request, $id)
    {
        $estudiantes = Estudiante::find($id);
        $estudiantes->fill($request->all())->save();
        
        $request->session()->flash('alert-success', 'Estudiante Actualizado');
        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $estudiantes = Estudiante::find($id);
        $estudiantes->delete();        

        $request->session()->flash('alert-success', 'Estudiante Eliminado');
        return redirect()->back();
    }
}
