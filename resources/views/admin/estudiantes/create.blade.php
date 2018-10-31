@extends('layouts.app')
@section('title', 'Crear Estudiantes')
@section('content')



<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('estudiantes.index') }}">Lista de Estudiantes</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('estudiantes.create') }}">Nuevo Estudiantiantes</a>
		        </li>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>







<div class="container">
	<div class="row justify-content-center">	
		<div class="col">
			
			<div class="card">
				    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
				<div class="card-body text-center">								
				<form method="post" action="{{ route('estudiantes.store') }}">
					@csrf
					<h3>Ingrese los Datos</h3>	



			 {{--Formulario--}}	


 		<div class="form-row">  {{--Contenedor Primera Fila--}}		



				<div class="col">  {{--Primera Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="p_nombre">Primer Nombre</label>
								<input type="text" class="form-control{{ $errors->has('p_nombre') ? ' is-invalid' : '' }}" name="p_nombre" input id="p_nombre"></input>
								@if ($errors->has('p_nombre'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('p_nombre') }}</strong>
										</span>
								@endif					
							</div>
						</div>

				</div> {{--Fin Columna--}}



				<div class="col"> {{-- Segunda Columna --}}

								<div class="form-group label-floating">								
								<label for="s_nombre">Segundo Nombre</label>
								<input type="text" class="form-control{{ $errors->has('s_nombre') ? ' is-invalid' : '' }}" name="s_nombre" input id="s_nombre"></input>
								@if ($errors->has('s_nombre'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('s_nombre') }}</strong>
										</span>
								@endif	
								</div>

				</div> {{--Fin Columna--}}




				<div class="col"> {{-- Tercera Columna --}}


								<div class="form-group label-floating">								
								<label for="p_apellido">Primer Apellido</label>
								<input type="text" class="form-control{{ $errors->has('p_apellido') ? ' is-invalid' : '' }}" name="p_apellido" input id="p_apellido"></input>
								@if ($errors->has('p_apellido'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('p_apellido') }}</strong>
										</span>
								@endif					
								</div>


				</div> {{--Fin Columna--}}



				<div class="col"> {{-- Cuarta Columna --}}


					<div class="form-group label-floating">								
								<label for="s_apellido">Segndo Apellido</label>
								<input type="text" class="form-control{{ $errors->has('s_apellido') ? ' is-invalid' : '' }}" name="s_apellido" input id="s_apellido"></input>
								@if ($errors->has('s_apellido'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('s_apellido') }}</strong>
										</span>
								@endif					
								</div>

				</div> {{--Fin Columna--}}

		</div>{{-- Fin Contenedor --}}


		<div class="form-row">  {{--Contenedor Segunda Fila--}}	

			<div class="col">  {{--Primera Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="codigo">Codigo</label>
								<input type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" input id="codigo"></input>
								@if ($errors->has('codigo'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('codigo') }}</strong>
										</span>
								@endif					
							</div>
						</div>

				</div> {{--Fin Columna--}}



				<div class="col"> {{-- Segunda Columna --}}

								<div class="form-group label-floating">								
								<label for="genero">Genero</label>
								<input type="text" class="form-control{{ $errors->has('genero') ? ' is-invalid' : '' }}" name="genero" input id="genero"></input>
								@if ($errors->has('genero'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('genero') }}</strong>
										</span>
								@endif	
								</div>

				</div> {{--Fin Columna--}}



		</div>{{-- Fin Contenedor --}}


 		<div class="form-row">  {{--Contenedor Tercera Fila--}}		



				<div class="col">  {{--Primera Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="fecha_nac">Fecha Nacimiento</label>
								<input type="date" class="form-control{{ $errors->has('fecha_nac') ? ' is-invalid' : '' }}" name="fecha_nac" input id="fecha_nac"></input>
								@if ($errors->has('fecha_nac'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('fecha_nac') }}</strong>
										</span>
								@endif					
							</div>
						</div>

				</div> {{--Fin Columna--}}


				<div class="col">  {{--Segunda Columna --}}	
						<div class="form-group">
							<div class="form-group label-floating">								
								<label for="direccion">Direccion</label>
								<input type="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" input id="direccion"></input>
								@if ($errors->has('direccion'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('direccion') }}</strong>
										</span>
								@endif					
							</div>
						</div>

				</div> {{--Fin Columna--}}

		</div>{{-- Fin Contenedor --}}



		<div class="form-row">  {{--Contenedor Cuarta Fila--}} 

					<div class="col"> {{-- Primera  Columna --}}

								<div class="form-group label-floating">								
								<label for="estado">Estado</label>
								<input type="text" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" input id="estado"></input>
								@if ($errors->has('estado'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('estado') }}</strong>
										</span>
								@endif					
								</div>

					</div> {{--Fin Columna--}}


					<div class="col"> {{-- Primera Columna --}}

							<div class="form-group label-floating">								
								<label for="usuario_id">Usuario</label>																
								<select class="form-control{{ $errors->has('usuario_id') ? ' is-invalid' : '' }}" name="usuario_id" id="usuario_id">
									@foreach ($users as $u)
										<option value="{{ $u['id'] }}">{{ $u['username'] }}</option>										
									@endforeach																										
								</select>																							
								@if ($errors->has('username'))
										<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('username') }}</strong>
										</span>
								@endif					
							</div>
			</div> {{--Fin Columna--}}

		</div>{{-- Fin Contenedor --}}

	
		</div>
																	
						<div class="form-group text-center">
							<button class="btn btn-primary" type="submit">Guardar</button>				
						</div>
					</form>											
				</div>
			</div>


	
		</div>
	</div>

</div>

			



@endsection
