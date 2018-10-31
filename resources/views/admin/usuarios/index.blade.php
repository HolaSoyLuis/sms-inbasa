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
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table id="datatable_table" class="table table-bordered table-condensed table-hover">
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
							<a href="#">
									<i class="material-icons">visibility</i>
									Ver
								</button>
							</a>
							<a href="#">
								<button class="btn btn-primary btn-sm" title="Editar">
									<i class="material-icons">edit</i>
									Editar
								</button>
							</a>
							<a href="" data-target="#" data-toggle="modal">
								<button class="btn btn-danger btn-sm" title="Eliminar">
									<i class="material-icons">delete</i>
									Eliminar
								</button>
							</a>
						</td>
					</tr>	
					@endforeach						
				</table>
			</div>
		</div>	
</div>
@endsection
