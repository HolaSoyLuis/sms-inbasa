@extends('layouts.app')
@section('title', 'Detalle comprobante')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detalle_comprobante.index') }}">Lista de detalles de comprobantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('detalle_comprobante.create') }}">Nuevo detalle de comprobante</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>


  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
			<div class="card-body">	
      <div class="table-responsive">
  <table id="datatable_table" class="table table-condensed table-hover">
    <thead>
        <tr>
          <td></td>
          <td class="td-actions text-center">Cantidad</td>
          <td class="td-actions text-center">Costo</td>
          <td class="td-actions text-center">Mes</td>
          <td class="td-actions text-center">Comprobante</td>
          <td class="td-actions text-center">Asignacion</td>
          <td class="td-actions text-center">Tipo de pago</td>
          <td>Accion</td>
        </tr>
    </thead>
    <tbody>
        @foreach($detallecomprobantes as $detallecomprobante)
        <tr>
            <td class="td-actions text-center">{{$detallecomprobante->id}}</td>
            <td class="td-actions text-center">{{$detallecomprobante->cantidad}}</td>
            <td class="td-actions text-center">{{$detallecomprobante->costo}}</td>
            <td class="td-actions text-center">{{$detallecomprobante->mes}}</td>

            @foreach($comprobantes as $comprobante)
              @if($comprobante->id == $detallecomprobante->comprobante_id)
                <td class="td-actions text-center">No. Serie:{{ $comprobante['serie']}} Total:{{ $comprobante['total']}}</td>
              @endif
            @endforeach

            @foreach($asignaciones as $asignacion)
              @if($asignacion->id == $detallecomprobante->asignacion_id)
                @foreach($estudiantes as $estudiante)
                  @if($estudiante->id == $asignacion->estudiante_id)
                    <td class="td-actions text-center">Fecha:{{ $asignacion['fecha_asignacion'] }} Estudiante:{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</td>
                  @endif
                @endforeach
              @endif
            @endforeach

            @foreach($tipopagos as $tipopago)
              @if($tipopago->id == $detallecomprobante->tipo_pago_id)
                <td class="td-actions text-center">{{ $tipopago['tipo'] }}</td>
              @endif
            @endforeach

            <td class="td-actions text-center">
                <form action="{{ route('detalle_comprobante.destroy', $detallecomprobante->id)}}" method="post">
                  <a href="{{ route('detalle_comprobante.pdf', $detallecomprobante->id)}}" class="btn btn-primary btn-sm" title="Print">
						      <i class="material-icons">print</i></a>
                  <a href="{{ route('detalle_comprobante.show',$detallecomprobante->id)}}" class="btn btn-primary btn-sm" title="Mostrar">
                  <i class="material-icons">visibility</i></a>
                  <a href="{{ route('detalle_comprobante.edit',$detallecomprobante->id)}}" class="btn btn-primary btn-sm" title="Editar">
                  <i class="material-icons">edit</i>Editar</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" title="Eliminar" type="submit">
                  <i class="material-icons">delete</i>Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>


@endsection
