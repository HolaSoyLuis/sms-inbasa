@extends('layouts.app')
@section('title', 'Editar Encargado')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('encargado.index') }}">Lista de encargados</a>
		        </li>
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('encargado.create') }}">Nuevo encargado</a>
		        </li>
            <li class="nav-item">
		          <a class="nav-link" href="{{ route('encargado.pdf') }}">Exportar PDF</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-8">
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
          <form method="post" action="{{ route('encargado.update', $encargado->id) }}">
            <h3>Actualice los Datos</h3>
            @method('PUT')
			@csrf
            <div class="form-row">
              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    {{ csrf_field() }}
                    <label for="name">Primer nombre: </label>
                    <input type="text" class="form-control" value='{{$encargado->p_nombre}}' name="p_nombre"/>
                </div>
              </div> {{--Fin Columna--}}

              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Segundo nombre: </label>
                    <input type="text" class="form-control" value='{{$encargado->s_nombre}}' name="s_nombre"/>
                </div>
              </div> {{--Fin Columna--}}
            </div>{{-- Fin Contenedor --}}

            <div class="form-row">
              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Primer apellido: </label>
                    <input type="text" class="form-control" value='{{$encargado->p_apellido}}' name="p_apellido"/>
                </div>
              </div> {{--Fin Columna--}}

              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Segundo apellido: </label>
                    <input type="text" class="form-control" value='{{$encargado->s_apellido}}' name="s_apellido"/>
                </div>
              </div> {{--Fin Columna--}}
            </div>{{-- Fin Contenedor --}}

            <div class="form-row">
              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                <select class="form-control" name="genero" id="genero" >
                    <?php
                        $array = array("Masculino", "Femenino");
                    ?>
                    @foreach ($array as $v)
                        @if($encargado->genero == $v)																	
                            <option value="{{ $v }}" selected="true">{{ $v }}</option>											
                        @elseif ($encargado->estado != $v)
                            <option value="{{ $v }}">{{ $v }}</option>																																				
                        @endif
                    @endforeach	
                </select>                   
                </div>
              </div> {{--Fin Columna--}}

              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Fecha de nacimiento: </label>
                    <input type="date" class="form-control" value='{{$encargado->fecha_nac}}' name="fecha_nac"/>
                </div>
              </div> {{--Fin Columna--}}
            </div>{{-- Fin Contenedor --}}

            <div class="form-row">
              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Direccion: </label>
                    <input type="text" class="form-control" value='{{$encargado->direccion}}' name="direccion"/>
                </div>
              </div> {{--Fin Columna--}}

              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">
                    <label for="price">Telefono: </label>
                    <input type="text" class="form-control" value='{{$encargado->telefono}}' name="telefono"/>
                </div>
              </div> {{--Fin Columna--}}
            </div>{{-- Fin Contenedor --}}

            <div class="form-row">
              <div class="col">  {{--Primera Columna --}}
                <div class="form-group">
                    <label for="price">CUI: </label>
                    <input type="text" class="form-control" value='{{$encargado->cui}}' name="cui"/>
                </div>
              </div> {{--Fin Columna--}}

              <div class="col">  {{--Primera Columna --}}
                <div class="form-group label-floating">                    
                    <select class="form-control" name="usuario_id">
                    @foreach ($users as $use)
                        @if($encargado->usuario_id == $use->id)																	
                            <option value="{{ $use['id'] }}" selected="true">{{ $use['username'] }}</option>
                        @elseif ($encargado->usuario_id != $use->id)
                            <option value="{{ $use['id'] }}">{{ $use['username'] }}</option>								
                        @endif																		
                    @endforeach	
                    </select>
                </div>
              </div> {{--Fin Columna--}}
            </div>{{-- Fin Contenedor --}}

              <button type="submit" class="btn btn-primary">Agregar</button>
              <a href="{{ route('encargado.index') }}" class="btn btn-default" >Cancelar</a>
          </form>
		    </div>
	    </div>
    </div>
  </div>
</div>
@endsection
