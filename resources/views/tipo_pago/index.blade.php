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
					<td>No</td>
					<td>Tipo</td>
					<td>Costo</td>
					<td>Detalle</td>
          <td>Accion</td>
				</thead>
				@foreach($tipopagos as $tipopago)
				<tr>
					<td class="td-actions text-left">{{$tipopago->id}}</td>
					<td class="td-actions text-left">{{$tipopago->tipo}}</td>
					<td class="td-actions text-left">{{$tipopago->costo}}</td>
					<td class="td-actions text-left">{{$tipopago->detalle}}</td>
					<td class="td-actions text-center">
						<form action="{{ route('tipo_pago.destroy', $tipopago->id)}}" method="post">
							<a href="{{ route('tipo_pago.edit',$tipopago->id)}}">
								<button class="btn btn-primary btn-sm" title="Editar"><i class="material-icons">edit</i>Editar</button>
							</a>            
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
	</div>
</div>
@endsection
