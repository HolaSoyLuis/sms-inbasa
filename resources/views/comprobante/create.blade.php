@extends('layouts.app')
@section('title', 'Comprobante')
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
      </div><br/>
    @endif
    <div class="container">
      <div class="row justify-content-center">
            <div class="card-body text-center">
      <form method="post" action="{{ route('comprobante.store') }}">
        <h3>Ingrese los datos</h3>

        <div class="form-row">
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label>Serie: </label>
              <input type="text" class="form-control" name="serie"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Descuento: </label>
              <input type="text" class="form-control" name="descuento"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Total: </label>
              <input type="text" class="form-control" name="total"/>
          </div>
          </div> 
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Detalles: </label>
              <input type="text" class="form-control" name="detalles"/>
          </div>
          </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Estado: </label>
              <select class="form-control" name="estado">
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
              <label>Empleado: </label>
                <select class="form-control" name="empleado_id">
                  @foreach ($empleados as $empleado)
                    <option value="{{ $empleado['id'] }}">{{ $empleado['p_nombre'] }} {{ $empleado['p_apellido'] }}</option>
                  @endforeach
                </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Forma de pago: </label>
                <select class="form-control" name="forma_pago_id">
                  @foreach ($formapagos as $formapago)
                    <option value="{{ $formapago['id'] }}">{{ $formapago['forma'] }}</option>
                  @endforeach
                </select>
          </div>
          </div> 
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label>Encargado: </label>
                <select class="form-control" name="encargado_id">
                  @foreach ($encargados as $encargado)
                    <option value="{{ $encargado['id'] }}">{{ $encargado['p_nombre'] }} {{ $encargado['p_apellido'] }}</option>
                  @endforeach
                </select>
          </div>
          </div>
          </div>
        </div>
        <!--
          <button type="submit" class="btn btn-primary" onclick="location.href='/detalle_comprobante/index'">Agregar</button>
        -->
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
