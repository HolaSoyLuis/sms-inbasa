<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ComprobanteRequest;

use App\Comprobante;
use App\Empleado;
use App\FormaPago;
use App\Encargado;

// use App\Http\Controllers\DetalleComprobanteController;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //empleado, forma_pago, encargado
        $comprobantes = Comprobante::all();
        $empleados = Empleado::all();
        $formapagos = FormaPago::all();
        $encargados = Encargado::all();
        return view('comprobante.index', compact('comprobantes', 'empleados', 'formapagos', 'encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $empleados = Empleado::all();
        $formapagos = FormaPago::all();
        $encargados = Encargado::all();
        return view('comprobante.create', compact('empleados', 'formapagos', 'encargados'));
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
            'serie'=> 'required',
            'descuento'=> 'required',
            'total' => 'required',
            'detalles' => 'required',
            'estado' => 'required',
            'empleado_id'=> 'required',
            'forma_pago_id'=> 'required',
            'encargado_id'=> 'required'
          ]);
    
        $empleados = Comprobante::create($request->all());

        // return view('/comprobante')->with('succes', 'Item agregado :D');
        return redirect('/detalle_comprobante/create')->with('error', 'Item agregado :D, ahora cree el detalle del comprobante');
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
        $comproba = Comprobante::find($id);
        $empleados = Empleado::all();
        $formapagos = FormaPago::all();
        $encargados = Encargado::all();
        return view('comprobante.edit', compact('comproba', 'empleados', 'formapagos', 'encargados'));
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
            'serie'=> 'required',
            'descuento'=> 'required',
            'total' => 'required',
            'detalles' => 'required',
            'estado' => 'required',
            'empleado_id'=> 'required',
            'forma_pago_id'=> 'required',
            'encargado_id'=> 'required'
          ]);

        $comprobante = Comprobante::find($id);
        $comprobante->serie = $request->get('serie');
        $comprobante->descuento = $request->get('descuento');
        $comprobante->total = $request->get('total');
        $comprobante->detalles = $request->get('detalles');
        $comprobante->estado = $request->get('estado');
        $comprobante->empleado_id = $request->get('empleado_id');
        $comprobante->forma_pago_id = $request->get('forma_pago_id');
        $comprobante->encargado_id = $request->get('encargado_id');

        $comprobante->save();
        return redirect('/comprobante')->with('succes', 'Item actualizado :D');
        //return redirect('/detalle_comprobante/create')->with('error', 'Item agregado :D, ahora cree el detalle del comprobante');
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
        $c = Comprobante::find($id);
        $c->delete();
        return redirect('/comprobante')->with('succes', 'Item eliminado :c');
    }

    public function pdf($id)
    {
        $compro = Comprobante::find($id);
        $empleados = Empleado::all();
        $formapagos = FormaPago::all();
        $encargados = Encargado::all();
        $pdf = \PDF::loadView('comprobante/pdf', ['compro'=>$compro,'empleados'=>$empleados,'formapagos'=>$formapagos,'encargados'=>$encargados])->setPaper('a4', 'landscape');
        return $pdf->download('file.pdf');
    }
}
