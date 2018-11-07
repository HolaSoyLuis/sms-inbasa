@extends('layouts.app')
@section('title', 'Empleados')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('empleados.index') }}">Lista de Empleados</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.create') }}">Nuevo Empleado</a>
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
							<th></th>	
							<th>Primer Nombre</th>					
							<th>Primer Apellido</th>
							<th>Genero</th>
							<th>Telefono</th>
							<th>Direccion</th>	
							<th>Opciones</th>
						</thead>		
						@foreach($empleados as $e)		
						<tr>
							<td class="td-actions text-left">{{$e->id}}</td>
							<td class="td-actions text-left">{{$e->p_nombre}}</td>
							<td class="td-actions text-left">{{$e->p_apellido}}</td>
							<td class="td-actions text-left">{{$e->genero}}</td>
							<td class="td-actions text-left">{{$e->telefono}}</td>
							<td class="td-actions text-left">{{$e->direccion}}</td>
							<td class="td-actions text-center">
								<form method="post" action="{{ route('empleados.destroy', $e->id) }}">						
									<a href="#" class="btn btn-info btn-sm" title="Ver">
										<i class="material-icons">visibility</i>Ver
									</a>
									<a href="{{ route('empleados.edit', $e->id) }}" class="btn btn-primary btn-sm" title="Editar">
											<i class="material-icons">edit</i>Editar
									</a>													
									@csrf
                  @method('DELETE')
									<button type="submit" class="btn btn-danger btn-sm" title="Eliminar">
										<i class="material-icons">delete</i>Eliminar
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