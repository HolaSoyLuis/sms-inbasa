<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
        $encargados = Encargado::all();

        return view('encargado.index', compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('encargado.create');

        $users = User::all();
        return view("encargado.create")->with(compact('users'));
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
            'p_nombre'=>'required',
            's_nombre'=> 'required',
            'p_apellido' => 'required',
            's_apellido'=> 'required',
            'genero'=> 'required',
            'fecha_nac'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required|integer',
            'cui'=> 'required|integer',
            'foto'=> 'required',
            'usuario_id' => 'required'
          ]);
          $encargado = new Encargado([
            'p_nombre'=> $request->get('p_nombre'),
            's_nombre'=> $request->get('s_nombre'),
            'p_apellido' => $request->get('p_apellido'),
            's_apellido'=> $request->get('s_apellido'),
            'genero'=> $request->get('genero'),
            'fecha_nac'=> $request->get('fecha_nac'),
            'direccion'=> $request->get('direccion'),
            'telefono'=> $request->get('telefono'),
            'cui'=> $request->get('cui'),
            'foto'=> $request->get('foto'),
            'usuario_id' => $request->get('usuario_id')
          ]);
          $encargado->save();
          return redirect('/encargado')->with('success', 'Encargado guardado :D');
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
        $encargado = Encargado::find($id);

        return view('encargado.edit', compact('encargado'));
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
            'p_nombre'=>'required',
            's_nombre'=> 'required',
            'p_apellido' => 'required',
            's_apellido'=> 'required',
            'genero'=> 'required',
            'fecha_nac'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required|integer',
            'cui'=> 'required',
            'foto'=> 'required',
            'usuario_id' => 'required'
        ]);
        $encargado = Encargado::find($id);
        $encargado->p_nombre = $request->get('p_nombre');
        $encargado->s_nombre = $request->get('s_nombre');
        $encargado->p_apellido = $request->get('p_apellido');
        $encargado->s_apellido = $request->get('s_apellido');
        $encargado->genero = $request->get('genero');
        $encargado->fecha_nac = $request->get('fecha_nac');
        $encargado->direccion = $request->get('direccion');
        $encargado->telefono = $request->get('telefono');
        $encargado->cui = $request->get('cui');
        $encargado->foto = $request->get('foto');
        $encargado->usuario_id = $request->get('usuario_id');

        $encargado->save();
        return redirect('/encargado')->with('success', 'Encargado actualizado :D');
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
        $encargado = Encargado::find($id);
        $encargado->delete();

        return redirect('/encargado')->with('success', 'Encargado eliminado');
    }
}
