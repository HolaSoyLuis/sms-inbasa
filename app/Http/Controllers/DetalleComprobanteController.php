<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleComprobante;
use App\Asignacion;
use App\Comprobante;
use App\TipoPago;

use App\Estudiante;

class DetalleComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detallecomprobantes = DetalleComprobante::all();
        $asignaciones = Asignacion::all();
        $comprobantes = Comprobante::all();
        $tipopagos = TipoPago::all();
        $estudiantes = Estudiante::all();

        return view('detalle_comprobante.index', compact('detallecomprobantes', 'asignaciones', 'comprobantes', 'tipopagos', 'estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $asignaciones = Asignacion::all();
        $comprobantes = Comprobante::all();
        $tipopagos = TipoPago::all();
        $estudiantes = Estudiante::all();
        return view('detalle_comprobante.create', compact('asignaciones', 'comprobantes', 'tipopagos', 'estudiantes'));
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
            'cantidad'=> 'required',
            'costo'=> 'required',
            'mes' => 'required',
            'comprobante_id'=> 'required',
            'asignacion_id'=> 'required',
            'tipo_pago_id'=> 'required'
          ]);
          $detallecomprobante = new DetalleComprobante([
            'cantidad'=> $request->get('cantidad'),
            'costo'=> $request->get('costo'),
            'mes' => $request->get('mes'),
            'comprobante_id'=> $request->get('comprobante_id'),
            'asignacion_id'=> $request->get('asignacion_id'),
            'tipo_pago_id'=> $request->get('tipo_pago_id')
          ]);
          $detallecomprobante->save();
          return redirect('/detalle_comprobante')->with('success', 'Detalle de comprobante guardado :D');
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
        $detallecomprobante = DetalleComprobante::find($id);
        $asignaciones = Asignacion::all();
        $comprobantes = Comprobante::all();
        $tipopagos = TipoPago::all();
        $estudiantes = Estudiante::all();

        return view('detalle_comprobante.show', compact('detallecomprobante', 'asignaciones', 'comprobantes', 'tipopagos', 'estudiantes'));
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
        $detallecomprobante = DetalleComprobante::find($id);
        $asignaciones = Asignacion::all();
        $comprobantes = Comprobante::all();
        $tipopagos = TipoPago::all();
        $estudiantes = Estudiante::all();

        return view('detalle_comprobante.edit', compact('detallecomprobante', 'asignaciones', 'comprobantes', 'tipopagos', 'estudiantes'));
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
            'cantidad'=>'required',
            'costo'=> 'required',
            'mes' => 'required',
            'comprobante_id'=> 'required',
            'asignacion_id'=> 'required',
            'tipo_pago_id'=> 'required'
        ]);
        $detallecomprobante = DetalleComprobante::find($id);
        $detallecomprobante->cantidad = $request->get('cantidad');
        $detallecomprobante->costo = $request->get('costo');
        $detallecomprobante->mes = $request->get('mes');
        $detallecomprobante->comprobante_id = $request->get('comprobante_id');
        $detallecomprobante->asignacion_id = $request->get('asignacion_id');
        $detallecomprobante->tipo_pago_id = $request->get('tipo_pago_id');

        $detallecomprobante->save();
        return redirect('/detalle_comprobante')->with('success', 'Detalle de comprobante actualizado :D');
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
        $DetalleComprobante = DetalleComprobante::find($id);
        $DetalleComprobante->delete();

        return redirect('/detalle_comprobante')->with('success', 'Detalle de comprobante de pogo eliminado :D');
    }
}
