<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BloqueRequest;
use App\Bloque;
use App\Ciclo;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloques = Bloque::all();      
        return view('admin/ciclosbloques/bloques/bloques')->with(compact('bloques')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/ciclosbloques/bloques/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloqueRequest $request)
    {
        $bloques = Bloque::create($request->all());
        $request->session()->flash('alert-success', 'Bloque Creado');
        return redirect()->route('bloques.index');                       
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
        $bloques = Bloque::find($id);
        return view('admin/ciclosbloques/bloques/edit')->with(compact('bloques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BloqueRequest $request, $id)
    {
        $bloques = Bloque::find($id);
        $bloques->fill($request->all())->save();

        $request->session()->flash('alert-success', 'Bloque Actualizado');
        return redirect()->route('bloques.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $bloques = Bloque::find($id);
        $bloques->delete();  
              
        Bloque::destroy($id);
        $request->session()->flash('alert-success', 'Bloque Eliminado');
        return redirect()->back();
    }
}
