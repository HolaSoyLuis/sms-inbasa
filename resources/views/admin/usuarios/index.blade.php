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
		          <a class="nav-link" href="{{ route('usuarios.index') }}">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.create') }}">Nuevo Usuario</a>
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

<div class="content">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@yield('content')
		</div>
	</div>
</div>
@endsection
