<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Iconos y Fuentes     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}" />

    <!-- CSS Files -->
    <link href="{{asset('css/material-dashboard.min.css?v=2.0.2')}}" rel="stylesheet" />
    @yield('css')

    <!-- Titulo -->
    <!-- <title>{{ config('app.name', 'INBASA') }}</title> -->
    <title>@yield('title', 'INBASA')</title>
</head>
<body>
    {{-- Inicio de Contenido Completo --}}
    <div class="wrapper ">
        {{-- Inicio SideBar --}}
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('img/bg_sidebar-1.jpg')}}">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                        GT
                </a>
                <a href="#" class="simple-text logo-normal">
                    UMG
                </a>
            </div>
            <div class="sidebar-wrapper">
                {{-- Apartados - Botones de Módulos --}}
                <ul class="nav">
                    {{-- Botones Módulo Home --}}
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('inicio') }}">

                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('inicio') }}">

                              <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    {{-- Botones Módulo Administración --}}
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#modAdmin">
                            <i class="material-icons">supervisor_account</i>
                            <p> Administración
                               <b class="caret"></b>
                            </p>
                        </a>
        
                        <div class="collapse" id="modAdmin">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('usuarios.index') }}">
                                      <span class="sidebar-mini"> U </span>
                                      <span class="sidebar-normal"> Usuarios </span>                                    
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('roles.index') }}">
                                      <span class="sidebar-mini"> RP </span>
                                      <span class="sidebar-normal"> Roles y Permisos </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('empleados.index') }}">
                                      <span class="sidebar-mini"> P </span>
                                      <span class="sidebar-normal"> Personal </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('estudiantes.index') }}">
                                      <span class="sidebar-mini"> ES </span>
                                      <span class="sidebar-normal"> Estudiantes </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('ciclos.index') }}">
                                      <span class="sidebar-mini"> CB </span>
                                      <span class="sidebar-normal"> Ciclos y Bimestres </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('grados.index') }}">
                                      <span class="sidebar-mini"> GS </span>
                                      <span class="sidebar-normal"> Grados y Secciones </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('cursos.index') }}">
                                      <span class="sidebar-mini"> C </span>
                                      <span class="sidebar-normal"> Cursos </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('centros.index') }}">
                                      <span class="sidebar-mini"> CE </span>
                                      <span class="sidebar-normal"> Centro Educativo </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('respaldos.index') }}">
                                      <span class="sidebar-mini"> BK </span>
                                      <span class="sidebar-normal"> Respaldos </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Fin Botones Administración --}}

                    {{-- Botones Módulo Docentes --}}
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#modDocente">
                            <i class="material-icons">assignment_ind</i>
                            <p> Docentes
                               <b class="caret"></b>
                            </p>
                        </a>
        
                        <div class="collapse" id="modDocente">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('docentes.cursos.index') }}">
                                      <span class="sidebar-mini"> C </span>
                                      <span class="sidebar-normal"> Cursos </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('docentes.horario.index') }}">
                                      <span class="sidebar-mini"> HR </span>
                                      <span class="sidebar-normal"> Horario </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('docentes.notas.index') }}">
                                      <span class="sidebar-mini"> N </span>
                                      <span class="sidebar-normal"> Notas </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Fin Botones Docentes --}}

                    {{-- Botones Módulo Encargados --}}
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#modEncargado">
                            <i class="material-icons">face</i>
                            <p> Encargado
                               <b class="caret"></b>
                            </p>
                        </a>
        
                        <div class="collapse" id="modEncargado">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('encargados.notas.index') }}">
                                      <span class="sidebar-mini"> NT </span>
                                      <span class="sidebar-normal"> Notas </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('encargados.horario.index') }}">
                                      <span class="sidebar-mini"> HR </span>
                                      <span class="sidebar-normal"> Horario Clases </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Fin Botones Encargados --}}

                    {{-- Botones Módulo Estudiantes --}}
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#modEstudiante">
                            <i class="material-icons">school</i>
                            <p> Estudiante
                               <b class="caret"></b>
                            </p>
                        </a>
        
                        <div class="collapse" id="modEstudiante">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('estudiantes.cursos.index') }}">
                                      <span class="sidebar-mini"> C </span>
                                      <span class="sidebar-normal"> Cursos </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('estudiantes.horario.index') }}">
                                      <span class="sidebar-mini"> HR </span>
                                      <span class="sidebar-normal"> Horario Clases </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Fin Botones Estudiantes --}}

                    {{-- Botones Módulo Gestión Económica --}}
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#modEconomico">
                            <i class="material-icons">account_balance_wallet</i>
                            <p> Gestión Económica
                               <b class="caret"></b>
                            </p>
                        </a>
        
                        <div class="collapse" id="modEconomico">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('inscripciones.index') }}">
                                      <span class="sidebar-mini"> IN </span>
                                      <span class="sidebar-normal"> Inscripciones </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('colegiaturas.index') }}">
                                      <span class="sidebar-mini"> CL </span>
                                      <span class="sidebar-normal"> Colegiaturas </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('costos.index') }}">
                                      <span class="sidebar-mini"> GC </span>
                                      <span class="sidebar-normal"> Gestión de Costos </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Fin Botones Gestión Económica --}}
                </ul>
            </div>
        </div>
        {{-- Fin Sidebar --}}

        {{-- Contenedor Principal --}}
        <div class="main-panel">
            {{-- Inicio NavBar --}}
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navPrin">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="dropUserIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{auth()->user()->username}}
                                    <i class="material-icons">person</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropUserIcon">
                                    <button class="dropdown-item" style="width:100%;">Ver Perfil</button>
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button class="dropdown-item" style="width:100%;">Cerrar Sesión</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- Fin NavBar --}}
            
            {{-- Contenido de Módulos --}}
            <div class="content">
                <div class="container-fluid">
                    {{-- Contenido de acuerdo al apartado seleccionado --}}
                    @yield('content')
                </div>
            </div>
            {{-- Fin Contentido de Módulos --}}

            {{-- Footer --}}
            <footer class="footer">
                <div class="container-fluid">
                  <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.umg.edu.gt/" target="_blank">
                            UMG
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Megaprog1/" target="_blank">
                            MEGAPROGRAMACIÓN
                            </a>
                        </li>
                    </ul>
                  </nav>
                  <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, UMG - Ingeniería.
                  </div>
                </div>
            </footer>
        </div>
        {{-- Fin Contenedor Principal --}}
    </div>
    {{-- Fin Contenido Completo --}}


</body>

    <!--   Scripts JS   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <!-- Chartist JS -->
    <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
    <!--  Plugin Notificaciones -->
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <!--    Centro de Control para Material Kit: ripples, efectos parallax,  -->
    <script src="{{asset('js/material-dashboard.min.js?v=2.0.2')}}" type="text/javascript"></script>
    <script src="{{asset('js/layout/app-plantilla.js')}}"></script>
    @yield('js')
</html>