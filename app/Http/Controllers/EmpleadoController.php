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
        /*
        $empleados = new Empleado();
        $empleados->p_nombre = $request->input('p_nombre');
        $empleados->s_nombre = $request->input('s_nombre'); 
        $empleados->p_apellido = $request->input('p_apellido'); 
        $empleados->s_apellido = $request->input('s_apellido'); 
        $empleados->genero = $request->input('genero');  
        $empleados->fecha_nac = $request->input('fecha_nac'); 
        $empleados->lugar_nac = $request->input('lugar_nac'); 
        $empleados->estado_civil = $request->input('estado_civil'); 
        $empleados->direccion = $request->input('direccion'); 
        $empleados->inicio_labores = $request->input('inicio_labores'); 
        $empleados->cui = $request->input('cui'); 
        $empleados->telefono = $request->input('telefono'); 
        $empleados->correo = $request->input('correo');
        $empleados->foto  = 'f'; 
        $empleados->estado = $request->input('estado');
        $empleados->usuario_id = $request->input('usuario_id'); 
        $empleados->cargo_id = $request->input('cargo_id');
        $empleados->centro_id = $request->input('centro_id');

        $empleados->save();
        return redirect('admin/personal/personal');
        */
        
        $empleados = Empleado::create($request->all()); 

        $request->session()->flash('alert-success', 'Empleado Creado con Exito');
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
        
        $request->session()->flash('alert-success', 'Empleado Actualizado con Exito');
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

        $request->session()->flash('alert-success', 'Empleado Eliminado con Exito');
        return redirect()->back();
    }
}
