@extends('layouts.app')
@section('title', 'Listado de Usuarios')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<!-- <h3>Listado de Usuarios <a href="usuarios/create"><button class="btn btn-success">Nuevo</button></h3></a>			 -->
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="create/">Nuevo Usuario</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Pricing</a>
		        </li>
		      </ul>
					<form class="form-inline ml-auto">
						<div class="form-group has-white">
							<input type="text" class="form-control" placeholder="Search">
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
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>No</th>	
					<th>Nombre</th>					
					<th>Rol</th>
					<th>Creado</th>
					<th>Actualizado</th>
					<th>Opciones</th>
				</thead>		
				@foreach($users as $user)		
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->username}}</td>
					<td>rol</td>
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
					<td>
						<a href="#">
							<button class="btn btn-info">Editar</button>
						</a>
						<a href="" data-target="#" data-toggle="modal">
							<button class="btn btn-danger">Eliminar</button>
						</a>
					</td>
				</tr>	
				@endforeach						
			</table>
		</div>		
	</div>
</div>
@endsection
