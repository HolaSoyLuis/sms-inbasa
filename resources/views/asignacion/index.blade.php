@extends('layouts.app')
@section('title', 'Asignacion')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.index') }}">Lista de asignaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.create') }}">Nueva asignacion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-body">	
        <div class="table-responsive">
          <table id="datatable_table" class="table table-condensed table-hover">
            <thead>                                             
              <td>Clave</td>
              <td>Estudiante</td>
              <td>Ciclo</td>
              <td>Grado</td>
              <td>Seccion</td>
              <td>Accion</td>                
            </thead>
            <tbody>
                @foreach($asignaciones as $asignacion)
                <tr>   
                  <td>{{$asignacion->clave_estudiante}}</td>

                  @foreach ($estudiantes as $estudiante)
                    @if ($estudiante->id == $asignacion->estudiante_id)
                      <td>{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</td>
                    @endif
                  @endforeach

                  @foreach($ciclos as $ciclo)
                    @if($ciclo->id == $asignacion->ciclo_id)
                      <td>{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</td>
                    @endif
                  @endforeach

                  @foreach($grados as $grado)
                    @if($grado->id == $asignacion->grado_id)
                      <td>{{ $grado['grado'] }}</td>
                    @endif
                  @endforeach

                  @foreach($secciones as $seccion)
                    @if($seccion->id == $asignacion->seccion_id)
                      <td>{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</td>
                    @endif
                  @endforeach
                  <td class="td-actions text-center">
                    <form  method="post" action="{{ route('asignacion.destroy', $asignacion->id)}}">
                      <a href="{{ route('asignacion.show',$asignacion->id)}}" class="btn btn-primary btn-sm" title="Mostrar">
                        <i class="material-icons">visibility</i>Ver
                      </a>                      
                      <a href="{{ route('asignacion.edit',$asignacion->id)}}" class="btn btn-primary btn-sm" title="Editar">
                        <i class="material-icons">edit</i>Editar
                      </a>                                            
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" title="Eliminar" type="submit">
                        <i class="material-icons">delete</i>Eliminar
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
