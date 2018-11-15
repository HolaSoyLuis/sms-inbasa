@extends('layouts.app')
@section('title', 'Asignacion')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('comprobante.index') }}">Lista de comprobantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('comprobante.create') }}">Nuevo comprobante</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
      <div class="row justify-content-center">
            <div class="card-body text-center">
    <form method="post" action="{{ route('comprobante.update', $comproba->id) }}">
        @method('PATCH')
        @csrf

      <div class="form-row">
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Serie: </label>
            <input type="text" class="form-control" name="serie" value="{{ $comproba->serie }}"/>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Descuento: </label>
            <input type="text" class="form-control" name="descuento" value="{{ $comproba->descuento }}"/>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <label>Total: </label>
            <input type="text" class="form-control" name="total" value="{{ $comproba->total }}"/>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <div class="form-group label-floating">
            <label>Detalles: </label>
            <input type="text" class="form-control" name="detalles" value="{{ $comproba->detalles }}"/>
        </div>
        </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
              <select class="form-control" name="estado">
                <!--
                @if ($comproba->estado == 1)
                  <option value="comprobante->estado" selected="true">Seleccionado: Procesado</option>
                @elseif ($comproba->estado == 2)
                  <option value="comprobante->estado" selected="true">Seleccionado: Impreso</option>
                @elseif ($comproba->estado == 3)
                  <option value="comprobante->estado" selected="true">Seleccionado: Anulado</option>
                @elseif ($comproba->estado == 4)
                  <option value="comprobante->estado" selected="true">Seleccionado: Pagado</option>
                @endif
              -->
                <option value="1">Procesado</option>
                <option value="2">Impreso</option>
                <option value="3">Anulado</option>
                <option value="4">Pagado</option>
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="empleado_id">
                <option selected="true" disabled="disabled">seleccione el empleado</option>
                  @foreach ($empleados as $empleado)
                    @if($comproba->empleado_id == $empleado->id)
                      <option value="{{ $empleado['id'] }}" selected="true">{{ $empleado['p_nombre'] }} {{ $empleado['p_apellido'] }}</option>
                    @elseif ($comproba->empleado_id != $empleado->id)
                      <option value="{{ $empleado['id'] }}">{{ $empleado['p_nombre'] }} {{ $empleado['p_apellido'] }}</option>
                    @endif
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="forma_pago_id">
              <option selected="true" disabled="disabled">seleccione la forma de pago</option>
                  @foreach ($formapagos as $formapago)
                    @if($comproba->forma_pago_id == $formapago->id)
                      <option value="{{ $formapago['id'] }}" selected="true">{{ $formapago['forma'] }}</option>
                    @endif
                  @endforeach
              </select>
        </div>
        </div>
        </div>
        <div class="col">
          <div class="form-group">
        <div class="form-group label-floating">
            <select class="form-control" name="encargado_id">
                <option selected="true" disabled="disabled">seleccione el encargado</option>
                <!--
                  @foreach ($encargados as $encargado)
                    @if($comproba->encargado_id == $encargado->id)
                      <option value="{{ $encargado['id'] }}" selected="true">{{ $encargado['p_nombre'] }} {{ $encargado['p_apellido'] }}</option>
                    @endif
                  @endforeach
                -->
                  @foreach ($encargados as $encargado)
                    @if($comproba->encargado_id == $encargado->id)
                      <option value="{{ $encargado['id'] }}" selected="true">{{ $encargado['p_nombre'] }} {{ $encargado['p_apellido'] }}</option>
                    @elseif ($comproba->encargado_id != $encargado->id)
                        <option value="{{ $encargado['id'] }}">{{ $encargado['p_nombre'] }} {{ $encargado['p_apellido'] }}</option>
                    @endif
                  @endforeach
              </select>
        </div>
        </div>
        </div>
      </div>
      <br>
      <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection
