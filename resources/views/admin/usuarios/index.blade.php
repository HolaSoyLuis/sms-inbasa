@extends('layouts.app')
@section('title', 'Listado de Usuarios')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('usuarios.index') }}">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.create') }}">Nuevo Usuario</a>
		        </li>
						<li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.pdf') }}">Exportar PDF</a>
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
			<div class="card-body text-center">	
				<div class="table-responsive">
					<table id="datatable_table" class="table table-condensed table-hover">
						<thead>
							<th></th>	
							<th>Nombre</th>											
							<th>Creado</th>
							<th>Actualizado</th>
							<th>Opciones</th>
						</thead>
						@foreach($users as $user)		
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->username}}</td>					
							<td>{{$user->created_at}}</td>
							<td>{{$user->updated_at}}</td>
							<td class="td-actions text-center">
								<form method="post" action="{{ route('usuarios.destroy', $user->id) }}">						
									<a href="#" class="btn btn-info btn-sm" title="Ver">
										<i class="material-icons">visibility</i>Ver
									</a>
									<a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary btn-sm" title="Editar">
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
