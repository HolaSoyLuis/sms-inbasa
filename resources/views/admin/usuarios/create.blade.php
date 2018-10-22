@extends('layouts.app')
@section('title', 'Crear Usuarios')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<!-- <h3>Listado de Usuarios <a href="usuarios/create"><button class="btn btn-success">Nuevo</button></h3></a>			 -->
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="/admin/usuarios/">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="">Nuevo Usuario</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="">Pricing</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">	
		<div class="col-md-4">
			<div class="card">
				<div class="card-body text-center">								
				<form method="post" action="{{ route('usuarios.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>										
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="username">Nombre</label>
								<input type="text" class="form-control" name="username" input id="username"></input>
								@if ($errors->has('username'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('username') }}</strong>
										</span>
								@endif					
							</div>
						</div>
								
						<div class="form-group">
							<div class="form-group label-floating">			
								<label for="password">{{ __('Contraseña') }}</label>					
										<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
										@if ($errors->has('password'))
												<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('password') }}</strong>
												</span>
										@endif					
							</div>
						</div>

						<div class="form-group">
							<div class="form-group label-floating">
								<label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>						
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>						
								</div>
						</div>
																	
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
