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
					<table id="datatable_table" class="table table-condensed table-hover">
						<thead>
							<td></td>
							<td class="td-actions text-left">Serie</td>
							<!--
							<td class="td-actions text-left">Descuento</td>
							-->
							<td class="td-actions text-left">Total</td>
							<td class="td-actions text-left">Detalles</td>
							<td class="td-actions text-left">Estado</td>
							<td class="td-actions text-left">Empleado</td>
							<td class="td-actions text-left">Forma de pago</td>
							<td class="td-actions text-left">Encargado</td>
							<td class="td-actions text-left">Opciones</td>
						</thead>
						@foreach($comprobantes as $compro)
						<tr>
							<td class="td-actions text-left">{{$compro->id}}</td>
							<td class="td-actions text-left">{{$compro->serie}}</td>
							<!--
							<td class="td-actions text-left">{{$compro->descuento}}</td>
							-->
							<td class="td-actions text-left">{{$compro->total}}</td>
							<td class="td-actions text-left">{{$compro->detalles}}</td>
							@if ($compro->estado == 1)            
								<td class="td-actions text-left">PROCESADO</td>
								@elseif ($compro->estado == 2)
								<td class="td-actions text-left">IMPRESO</td>
								@elseif ($compro->estado == 3)
								<td class="td-actions text-left">ANULADO</td>
								@elseif ($compro->estado == 4)
								<td class="td-actions text-left">PAGADO</td>
							@endif

							@foreach($empleados as $e)
								@if($e->id == $compro->empleado_id)
									<td class="td-actions text-left">{{$e->p_nombre}} {{$e->p_apellido}}</td>
								@endif
							@endforeach


							@foreach($formapagos as $fp)
								@if($fp->id == $compro->forma_pago_id)
									<td class="td-actions text-left">{{$fp->forma}}</td>
								@endif
							@endforeach

							@foreach($encargados as $e)
								@if($e->id == $compro->encargado_id)
									<td class="td-actions text-left">{{$e->p_nombre}} {{$e->p_apellido}}</td>
								@endif
							@endforeach
							
							<td class="td-actions text-center">
								<form action="{{ route('comprobante.destroy', $compro->id)}}" method="post">
									<a href="{{ route('comprobante.pdf', $compro->id)}}" class="btn btn-primary btn-sm" title="Print">
									<i class="material-icons">print</i>Print</a>
									<a href="{{ route('comprobante.edit',$compro->id)}}" class="btn btn-primary btn-sm" title="Editar">
									<i class="material-icons">edit</i>Editar</a>
									@csrf
									@method('DELETE')
									<button class="btn btn-danger btn-sm" title="Eliminar">
										<i class="material-icons">delete</i>Eliminar</button>
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
