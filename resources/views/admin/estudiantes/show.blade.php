@extends('layouts.app')
@section('title', 'Estudiantes')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('empleados.index') }}">Lista de Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('empleados.create') }}">Nuevo Empleado</a>
            </li>
            <li class="nav-item">
		          <a class="nav-link" href="{{ route('empleados.pdf') }}">Exportar PDF</a>
		        </li>
            <li class="nav-item active">
		          <a class="nav-link" href="">lista de Detales</a>
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
        <h3>Detalle del Estudiante</h3>
        </center>
        <div class="form-row"> {{--Primera Fila --}} 

          <div class="col">{{--Primera Columna --}}    
            <label>Primer Nombre:</label>
          </div> {{--Fin Columna--}} 

          <div class="col"> {{--Segunda Columna --}}     
            <p>{{$estudiantes->p_nombre}}</p>                 
          </div> {{--Fin Columna--}}
    
          <div class="col">{{--Primera Columna --}}
            <label>Segundo Nombre:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}                   
            <p>{{$estudiantes->s_nombre}}</p>        
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Segunda Fila --}} 
          <div class="col">{{--Primera Columna --}}
            <label>Primer Apellido:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->p_apellido}}</p>
          </div> {{--Fin Columna--}}
     
          <div class="col">{{--Primera Columna --}}
            <label>Segundo Apellido:</label>
          </div> {{--Fin Columna--}}
            
          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->s_apellido}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Tercera Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>codigo:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->codigo}}</p>
          </div> {{--Fin Columna--}}
   
          <div class="col">{{--Primera Columna --}}
            <label>Genero:</label>
          </div> {{--Fin Columna--}}
          
          <div class="col"> {{--Segunda Columna --}}            
            <p>{{$estudiantes->genero}}</p>
          </div> {{--Fin Columna--}}
        </div>

        <div class="form-row"> {{--Cuarta Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Fecha de Nacimiento:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->fecha_nac}}</p>
          </div> {{--Fin Columna--}}
   
          <div class="col">{{--Primera Columna --}}
            <label>Direccion:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->direccion}}</p>
          </div> {{--Fin Columna--}}            
        </div>

        <div class="form-row"> {{--Quinta Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Estado:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            @if ($estudiantes->estado == 1)            
              <p>ACTIVO</p>
            @elseif ($estudiantes->estado == 2)
              <p>INACTIVO</p>
            @elseif ($estudiantes->estado == 3)
              <p>RETIRADO</p>
            @elseif ($estudiantes->estado == 4)
              <p>SUSPENDIDO</p>
            @endif
          </div> {{--Fin Columna--}} 

          <div class="col">{{--Primera Columna --}}
            <label>Usuarios:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}																																		
            @foreach ($users as $u)
              @if($estudiantes->usuario_id == $u->id)
                <p>{{ $u['username'] }}</p>
              @endif
            @endforeach
          </div> {{--Fin Columna--}}   
        </div>

        <div class="form-row"> {{--Quinta Fila --}}
          <div class="col">{{--Primera Columna --}}
            <label>Datos Actualizados:</label>
          </div> {{--Fin Columna--}}

          <div class="col"> {{--Segunda Columna --}}
            <p>{{$estudiantes->updated_at}}</p>
          </div> {{--Fin Columna--}}            
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection
