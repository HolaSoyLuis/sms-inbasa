<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoRequest;

use App\Empleado;
use App\User;
use App\Centro;
use App\Cargo;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $users = User::all();
        return view('admin/personal/personal')->with(compact('empleados', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $cargos = Cargo::all();
        $centros = Centro::all();
        return view("admin/personal/create")->with(compact('users','cargos','centros'));            
    }

    public function createPDF()
    {
        $empleados = Empleado::all();
        $pdf = \PDF::loadView('admin/personal/pdf', ['empleados' => $empleados])->setPaper('a4', 'landscape');
        return $pdf->download('Reporte Empleados.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoRequest $request)
    {       
        $empleados = Empleado::create($request->all()); 

        $request->session()->flash('alert-success', 'Empleado Creado');
        return redirect()->route('empleados.index');            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado, $id)
    {
        $empleados = Empleado::find($id);
        $users = User::all();
        $cargos = Cargo::all();
        $centros = Centro::all();
        return view('admin/personal/show')->with(compact('empleados','users','cargos','centros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::find($id);
        $users = User::all();
        $cargos = Cargo::all();
        $centros = Centro::all();
        return view('admin/personal/edit')->with(compact('empleados','users','cargos','centros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadoRequest $request, $id)
    {        
        $empleados = Empleado::find($id);
        $empleados->fill($request->all())->save();
        
        $request->session()->flash('alert-success', 'Empleado Actualizado');
        return redirect()->route('empleados.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $empleados = Empleado::find($id);
        $empleados->delete();        

        $request->session()->flash('alert-success', 'Empleado Eliminado');
        return redirect()->back();
    }
}
