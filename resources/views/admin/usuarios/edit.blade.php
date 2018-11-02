@extends('layouts.app')
@section('title', 'Crear Usuarios')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.index') }}">Lista de Usuarios</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('usuarios.create') }}">Nuevo Usuario</a>
		        </li>
						<li class="nav-item active">
		          <a class="nav-link" href="">Editar Usuario</a>
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
				<form method="POST" action="{{ route('usuarios.update', $users->id) }}">										
					@method('PUT')
					@csrf
					<h3>Actualizar Datos</h3>										
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="username">Nombre</label>
								<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value='{{$users->username}}' name="username" id="username" required autofocus>
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
							<button class="btn btn-primary" type="submit">Actualizar</button>
							<a href="{{ route('usuarios.index') }}" class="btn btn-default" >Cancelar</a>				
						</div>
					</form>										
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
