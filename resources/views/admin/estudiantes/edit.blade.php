@extends('layouts.app')
@section('title', 'Editar Estudiantes')
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
					<li class="nav-item">
						<a class="nav-link" href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('estudiantes.pdf') }}">Exportar PDF</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="">Actualizar Estudiante</a>
					</li>		
				</ul>				
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
					<form method="post" action="{{ route('estudiantes.update', $estudiantes->id) }}">						
						<h3>Actualizar los Datos</h3>
						@method('PUT')
						@csrf	
			 			{{--Formulario--}}	
 						<div class="form-row">  {{--Contenedor Primera Fila--}}		
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group">
									<div class="form-group label-floating">								
										<label for="p_nombre">Primer Nombre</label>
										<input type="text" class="form-control{{ $errors->has('p_nombre') ? ' is-invalid' : '' }}" value='{{$estudiantes->p_nombre}}' name="p_nombre" input id="p_nombre">
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
									<input type="text" class="form-control{{ $errors->has('s_nombre') ? ' is-invalid' : '' }}" value='{{$estudiantes->s_nombre}}' name="s_nombre" input id="s_nombre">
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
									<input type="text" class="form-control{{ $errors->has('p_apellido') ? ' is-invalid' : '' }}" value='{{$estudiantes->p_apellido}}' name="p_apellido" input id="p_apellido">
									@if ($errors->has('p_apellido'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('p_apellido') }}</strong>
										</span>
									@endif					
								</div>
							</div> {{--Fin Columna--}}

							<div class="col"> {{-- Cuarta Columna --}}
								<div class="form-group label-floating">								
									<label for="s_apellido">Segundo Apellido</label>
									<input type="text" class="form-control{{ $errors->has('s_apellido') ? ' is-invalid' : '' }}" value='{{$estudiantes->s_apellido}}' name="s_apellido" input id="s_apellido">
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
										<input type="text" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" value='{{$estudiantes->codigo}}' name="codigo" input id="codigo">
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
									<select class="form-control" name="genero" id="genero" >
									<?php
										$array = array("Masculino", "Femenino");
									?>
									@foreach ($array as $v)
										@if($estudiantes->genero == $v)																	
											<option value="{{ $v }}" selected="true">{{ $v }}</option>											
										@elseif ($estudiantes->estado != $v)
											<option value="{{ $v }}">{{ $v }}</option>																																				
										@endif
									@endforeach	
									</select>		
									@if ($errors->has('genero'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('genero') }}</strong>
										</span>
									@endif	
								</div>
							</div> {{--Fin Columna--}}
						
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group">
									<div class="form-group label-floating">								
										<label for="fecha_nac">Fecha Nacimiento</label>
										<input type="date" class="form-control{{ $errors->has('fecha_nac') ? ' is-invalid' : '' }}" value='{{$estudiantes->fecha_nac}}' name="fecha_nac" input id="fecha_nac">
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
										<input type="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" value='{{$estudiantes->direccion}}' name="direccion" input id="direccion">
										@if ($errors->has('direccion'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('direccion') }}</strong>
											</span>
										@endif					
									</div>
								</div>
							</div> {{--Fin Columna--}}
						</div>{{-- Fin Contenedor --}}

 						<div class="form-row">  {{--Contenedor Tercera Fila--}}		
							<div class="col"> {{-- Primera  Columna --}}
								<div class="form-group label-floating">								
									<select class="form-control" name="estado" id="estado">
										<?php
											$array = [
												[1, "ACTIVO"],
												[2, "INACTIVO"],
												[3, "RETIRADO"],
												[4, "SUSPENDIDO"]
											];
										?>
										@foreach ($array as list($k, $v))
											@if($estudiantes->estado == $k)																	
												<option value="{{ $k }}" selected="true">{{ $v }}</option>											
											@elseif ($estudiantes->estado != $k)
												<option value="{{ $k }}">{{ $v }}</option>																																				
											@endif
										@endforeach
									</select>									
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
									<select class="form-control" name="usuario_id" id="usuario_id">
									@foreach ($users as $use)
										@if($estudiantes->usuario_id == $use->id)																	
											<option value="{{ $use['id'] }}" selected="true">{{ $use['username'] }}</option>
										@elseif ($estudiantes->usuario_id != $use->id)
                      						<option value="{{ $use['id'] }}">{{ $use['username'] }}</option>								
										@endif																		
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
																	
						<div class="form-group text-center">
							<button class="btn btn-primary" type="submit">Actualiar</button>				
							<a href="{{ route('estudiantes.index') }}" class="btn btn-default" >Cancelar</a>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
