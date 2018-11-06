<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPago;

class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipopagos = TipoPago::all();
        return view('tipo_pago.index', compact('tipopagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo_pago.create');
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
          'tipo' => 'required',
          'costo' => 'required',
          'detalle' => 'required'
        ]);

        $tipo_pago = new TipoPago([
          'tipo' => $request->get('tipo'),
          'costo' => $request->get('costo'),
          'detalle' => $request->get('detalle')
        ]);

        $tipo_pago->save();

        return redirect('/tipo_pago')->with('success', 'tipo de pago guardado :D');
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
        $tipo_pago = TipoPago::find($id);
        return view('tipo_pago.show', compact('tipo_pago'));
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
        $tipopago = TipoPago::find($id);

        return view('tipo_pago.edit', compact('tipopago'));
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
          'tipo' => 'required',
          'costo' => 'required',
          'detalle' => 'required'
        ]);

        $tipo_pago = TipoPago::find($id);
        $tipo_pago->tipo = $request->get('tipo');
        $tipo_pago->costo = $request->get('costo');
        $tipo_pago->detalle = $request->get('detalle');

        $tipo_pago->save();

        return redirect('/tipo_pago')->with('success', 'Tipo de pago actualizado :D');
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
        $tipo_pago = TipoPago::find($id);
        $tipo_pago->delete();

        return redirect('/tipo_pago')->with('success', 'Tipo de pago eliminado :D');
    }
}
