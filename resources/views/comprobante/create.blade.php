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
            <li class="nav-item">
		          <a class="nav-link" href="{{ route('comprobante.create') }}">Nuevo comprobante</a>
		        </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col">			
			<div class="card">
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
              <input type="text" class="form-control" name="descuento" placeholder="Ejemplo: 0.15"/>
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
              <select class="form-control" name="estado">
              <option value="" disabled selected hidden>--Seleccione un Estado--</option>
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
                    <option value="" disabled selected hidden>---Seleccione un Empleado---</option>
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
                <select class="form-control" name="forma_pago_id">
                <option value="" disabled selected hidden>--Seleccione una Forma de Pago--</option>
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
              <label></label>
                <select class="form-control" name="encargado_id">
                <option value="" disabled selected hidden>--Seleccione un Encargado--</option>
                  @foreach ($encargados as $encargado)
                    <option value="{{ $encargado['id'] }}">{{ $encargado['p_nombre'] }} {{ $encargado['p_apellido'] }}</option>
                  @endforeach
                </select>
          </div>
          </div>
          </div>
        </div>
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
