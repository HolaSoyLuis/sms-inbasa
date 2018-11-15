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
		    </div>
		  </div>
		</nav>
	</div>
</div>
@include('message._message')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-body">	
				<div class="table-responsive">
					<table id="datatable_table" class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<td></td>
							<td>Serie</td>
							<td>Descuento</td>
							<td>Total</td>
							<td>Detalles</td>
							<td>Estado</td>
							<td>Empleado</td>
							<td>Forma de pago</td>
							<td>Encargado</td>
							<td>Accion</td>
						</thead>
						@foreach($comprobantes as $compro)
						<tr>
							<td class="td-actions text-left">{{$compro->id}}</td>
							<td class="td-actions text-left">{{$compro->serie}}</td>
							<td class="td-actions text-left">{{$compro->descuento}}</td>
							<td class="td-actions text-left">{{$compro->total}}</td>
							<td class="td-actions text-left">{{$compro->detalles}}</td>
							<td class="td-actions text-left">{{$compro->estado}}</td>
							<td class="td-actions text-left">{{$compro->empleado_id}}</td>
							<td class="td-actions text-left">{{$compro->forma_pago_id}}</td>
							<td class="td-actions text-left">{{$compro->encargado_id}}</td>
							<td class="td-actions text-center">
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
	</div>
</div>
@endsection
