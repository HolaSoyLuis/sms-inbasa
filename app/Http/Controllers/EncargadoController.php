<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EncargadoRequest;
use App\Encargado;
use App\User;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::all();
        return view('admin/encargados/index')->with(compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin/encargados/create')->with(compact('users'));
    }

    public function createPDF()
    {
        $encargados = Encargado::all();
        $pdf = \PDF::loadView('admin/encargados/pdf', ['encargados' => $encargados]);
        return $pdf->download('Reporte Encargados.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncargadoRequest $request)
    {
        $encargados = Encargado::create($request->all());
        $request->session()->flash('alert-success', 'Encargado Creado');
        return redirect()->route('encargado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encargado = Encargado::find($id);
        $users = User::all();
        return view('admin/encargados/show')->with(compact('encargado', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encargado = Encargado::find($id);
        $users = User::all();
        return view('admin/encargados/edit')->with(compact('encargado', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EncargadoRequest $request, $id)
    {
        $encargado = Encargado::find($id);
        $encargado->fill($request->all())->save();
        
        $request->session()->flash('alert-success', 'Encargado Actualizado');
        return redirect()->route('encargado.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $encargado = Encargado::find($id);
        $encargado->delete();

        $request->session()->flash('alert-success', 'Encargado Eliminado');
        return redirect()->back();        
    }
}
