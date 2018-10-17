<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Iconos y Fuentes     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
    <link href="{{ asset('css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

    <!-- Titulo -->
    <title>{{ config('app.name', 'INBASA') }}</title>
</head>
<body>
    {{-- Inicio Contenido Completo --}}
    <div class="wrapper ">
        {{-- Inicio Dashboard --}}
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg')}}">
            <div class="logo">
                <a href="https://www.umg.edu.gt" target="_blank" class="simple-text logo-normal">
                UMG
                </a>
            </div>
            <div class="sidebar-wrapper">

                {{-- Info del usuario --}}
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('img/faces/avatar.jpg')}}" />
                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>
                            {{ auth()->user()->username }}
                            <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Fin Info del Usuario --}}
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="collapse" href="#pagAdmin">
                            <i class="material-icons">dashboard</i>
                            <p>Administración
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagAdmin">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Pricing </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Pricing </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Pricing </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                        <i class="material-icons">home</i>
                        <p>Home</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- Fin Dashboard --}}
    
        {{-- Contenido Principal --}}
        <div class="main-panel">
            
            {{-- Inicio Navbar --}}
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <p class="navbar-brand" href="#">Dashboard</p>
                    </div>
                    {{-- Icono para el toggle al colapsar - mobile version --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="dropUsuario" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Cuenta
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropUsuario">
                                    <a class="dropdown-item" href="#">Ver Perfil</a>
                                    <a class="dropdown-item" href="#">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- Fin Navbar --}}

            {{-- Espacio para el contenido --}}
            <div class="content">
                <div class="container-fluid">
                    {{-- Contenido a agregar dependiendo del módulo --}}
                    @yield('content')
                </div>
            </div>
            {{-- Fin Contenido --}}

        </div>
        {{-- Fin Contenido Principal --}}

    </div>
    {{-- Fin Contenido Completo --}}


</body>

    <!--   Scripts JS   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    
    <!-- Chartist JS -->
    <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
    <!--    Centro de Control para Material Kit: ripples, efectos parallax,  -->
    <script src="{{asset('js/material-kit.js?v=1.2.1')}}" type="text/javascript"></script>

</html>


{{-- 
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}