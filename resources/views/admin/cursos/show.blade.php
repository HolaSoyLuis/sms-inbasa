@extends('layouts.app')
@section('title', 'Crear Curso')
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

<div class="row justify-content-center">
  <div class="col-md-8">
		<div class="card">    
			<div class="card-body text-left">        
        <center>      
        <h3>Detalle del Curso</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>Codigo:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$cursos->codigo}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Nombre del Curso:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$cursos->nombre}}</p>        
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Descripción:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$cursos->descripcion}}</p>
          </div> {{--Fin Columna--}}
     
          <div class="col">{{--Primera Columna --}}
            <label>Estado:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            @if ($cursos->estado == 1)            
              <p>ACTIVO</p>
            @elseif ($cursos->estado == 2)
              <p>INACTIVO</p>
            @endif             
          </div> {{--Fin Columna--}}    

        </div>

        <div class="form-row"> {{--Tercera Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Grado:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}																																		
            @foreach ($grados as $gr)
              @if($cursos->grado_id == $gr->id)
                <p>{{ $gr['grado'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}  
   
          <div class="col">{{--Primera Columna --}}
            <label>Docente:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}																																		
            @foreach ($docentes as $do)
              @if($cursos->docente_id == $do->id)
                <p>{{ $do['p_nombre'] }} {{ $do['p_apellido'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}		    
        </div>

        <div class="form-row"> {{--Tercera Fila --}}
		  <div class="col">{{--Primera Columna --}}    
            <label>Creado:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$cursos->created_at}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Actualizado:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$cursos->updated_at}}</p>        
          </div> {{--Fin Columna--}}		    
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection
