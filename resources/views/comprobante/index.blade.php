@extends('layouts.app')
@section('title', 'Comprobante')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('comprobante.index') }}">Lista de comprobantes</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('comprobante.create') }}">Nuevo comprobante</a>
		        </li>
		      </ul>
				<form class="form-inline ml-auto">
					<div class="form-group has-white">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-white btn-just-icon btn-round">
							<i class="material-icons">search</i>
					</button>
				</form>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table id="datatable_table" class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>No</th>
					<th>Serie</th>
					<th>Descuento</th>
					<th>Total</th>
					<th>Detalles</th>
					<th>Estado</th>
					<th>Empleado</th>
					<th>Forma de pago</th>
					<th>Tipo de pago</th>
					<th>Accion</th>
				</thead>
				@foreach($comprobantes as $compro)
				<tr>
					<td>{{$compro->id}}</td>
					<td>{{$compro->serie}}</td>
					<td>{{$compro->descuento}}</td>
					<td>{{$compro->total}}</td>
					<td>{{$compro->detalles}}</td>
					<td>{{$compro->estado}}</td>
					<td>{{$compro->empleado_id}}</td>
					<td>{{$compro->forma_pago_id}}</td>
					<td>{{$compro->tipo_pago_id}}</td>
					<td>
            <a href="{{ route('comprobante.edit',$compro->id)}}">
              <button class="btn btn-primary btn-sm" title="Editar"><i class="material-icons">edit</i>Editar</button>
            </a>
            <form action="{{ route('comprobante.destroy', $compro->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" title="Eliminar">
								<i class="material-icons">delete</i>
								Eliminar
							</button>
            </form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
