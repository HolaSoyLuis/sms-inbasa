@extends('layouts.app')
@section('title', 'Tipo pago')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('tipo_pago.index') }}">Lista de tipos de pago</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('tipo_pago.create') }}">Nuevo tipo de pago</a>
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
					<th>Tipo</th>
					<th>Costo</th>
					<th>Detalle</th>
          <th>Accion</th>
				</thead>
				@foreach($tipopagos as $tipopago)
				<tr>
					<td>{{$tipopago->id}}</td>
					<td>{{$tipopago->tipo}}</td>
					<td>{{$tipopago->costo}}</td>
					<td>{{$tipopago->detalle}}</td>
					<td>
            <a href="{{ route('tipo_pago.edit',$tipopago->id)}}">
              <button class="btn btn-primary btn-sm" title="Editar"><i class="material-icons">edit</i>Editar</button>
            </a>
            <form action="{{ route('tipo_pago.destroy', $tipopago->id)}}" method="post">
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
