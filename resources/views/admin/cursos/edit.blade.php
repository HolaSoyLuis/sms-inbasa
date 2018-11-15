@extends('layouts.app')
@section('title', 'Editar Curso')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.index') }}">Lista de Cursos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('cursos.create') }}">Nuevo Curso</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">	
		<div class="col-md-6">
			<div class="card">
				<div class="card-body text-center">								
					<form method="post" action="{{ route('cursos.update', $cursos->id) }}">
						@method('PUT')
						@csrf
						<h3>Actualizar los Datos</h3>		
						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}						
								<div class="form-group label-floating">								
									<label for="codigo">Codigo</label>
									<input type="text" class="form-control" value='{{$cursos->codigo}}' name="codigo" input id="codigo">
									@if ($errors->has('codigo'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('codigo') }}</strong>
										</span>
									@endif					
								</div>
							</div>						
							<div class="col">
								<div class="form-group label-floating">								
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" value='{{$cursos->nombre}}' name="nombre" input id="nombre">
									@if ($errors->has('nombre'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('nombre') }}</strong>
										</span>
									@endif					
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}
							
						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}	
								<div class="form-group label-floating">								
									<label for="descripcion">Descripción</label>
									<input type="text" class="form-control" value='{{$cursos->descripcion}}' name="descripcion" input id="descripcion">
									@if ($errors->has('descripcion'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('descripcion') }}</strong>
										</span>
									@endif					
								</div>
							</div>
							
							<div class="col">
								<div class="form-group label-floating">																									
									<select class="form-control" name="estado" id="estado">
										<?php
											$array = [
												[1, "ACTIVO"],
												[2, "INACTIVO"]
											];
										?>
										@foreach ($array as list($k, $v))
											@if($cursos->estado == $k)																	
												<option value="{{ $k }}" selected="true">{{ $v }}</option>											
											@elseif ($cursos->estado != $k)
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
							</div>
						</div>{{-- Fin Contenedor --}}

						<div class="form-row">  
							<div class="col">  {{--Primera Columna --}}								
								<div class="form-group label-floating">																																	
									<select class="form-control{{ $errors->has('grado_id') ? ' is-invalid' : '' }}" name="grado_id" id="grado_id">										
										@foreach ($grados as $u)
											@if($cursos->grado_id == $u->id)	
												<option value="{{ $u['id'] }}" selected="true">{{ $u['grado'] }}</option>										
											@elseif ($cursos->grado_id != $u->id)
                      							<option value="{{ $u['id'] }}">{{ $u['grado'] }}</option>								
											@endif	
										@endforeach																										
									</select>																							
									@if ($errors->has('grado_id'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('garado_id') }}</strong>
										</span>
									@endif					
								</div>
							</div>

							<div class="col">  {{--Primera Columna --}}
								<div class="form-group label-floating">								
									<label for="docente_id"></label>																
									<select class="form-control{{ $errors->has('docente_id') ? ' is-invalid' : '' }}" name="docente_id" id="docente_id">									
										@foreach ($docentes as $do)
											@if($cursos->docente_id == $do->id)																	
												<option value="{{ $do['id'] }}" selected="true">{{ $do['p_nombre'] }}</option>
											@elseif ($cursos->docente_id != $do->id)
												<option value="{{ $do['id'] }}">{{ $do['p_nombre'] }}</option>								
											@endif										
										@endforeach
									</select>																							
									@if ($errors->has('docente_id'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('docente_id') }}</strong>
										</span>
									@endif					
								</div>
							</div>
						</div>{{-- Fin Contenedor --}}

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Actualizar</button>
							<a href="{{ route('cursos.index') }}" class="btn btn-default" >Cancelar</a>				
						</div>
					</form>											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
