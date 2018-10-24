<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--     Iconos y Fuentes     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
    <link href="{{ asset('css/principal.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'INBASA') }}</title>
</head>
<body >

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
    	<div class="container">
        	<!-- Toogle para dispositivos móviles -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#">INBASA</a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <a href="{{ url('/inicio') }}" class="btn btn-rose btn-round">
                                <i class="material-icons">home</i>Inicio
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/desarrolladores') }}" class="btn btn-white btn-simple">
                                <i class="material-icons">work</i> Desarrolladores
                            </a>
                        </li>
                        <li class="button-container">
                            <a class="btn btn-rose btn-round" data-toggle="modal" data-target="#modalLogin">
                                <i class="material-icons">person_pin</i> Iniciar Sesión
                            </a>
                        </li>
                    @endauth
        		</ul>
        	</div>
    	</div>
    </nav>

    <!--  Fondo  -->
    <div class="page-header header-filter bg-header" data-parallax="true" style="background-image: url('{{ asset('img/bg_header.jpg') }}');">
        <div class="container">
            <div class="row">
				<div class="col-xs-10 col-sm-8">
					<h1 class="title">INBASA</h1>
                    <h4>Instituto Básico por Cooperativa San Andrés Chápil, San Pedro Sacatepéquez.</h4>
				</div>
            </div>
        </div>
    </div>

    <!-- Contenedor Principal -->
    <div class="main main-raised">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h4 class="title">Quiénes Somos?</h4>
                    <p class="description-p">El Instituto Básico por Cooperativa tiene como finalidad contribuir a la formación integral de los guatemaltecos, en las áreas y niveles regidos y autorizados por el Ministerio de Educación.</p>
                    <hr />
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="title">Misión</h4>
                    <p class="description-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quaerat a distinctio ea harum, culpa dicta doloremque ab quos! Corporis blanditiis omnis nostrum natus esse magni cumque ipsa iusto quam.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat suscipit eligendi, delectus quasi voluptatibus iste molestias. Mollitia rerum esse aspernatur numquam nostrum voluptatibus pariatur ipsam sunt nobis enim. Necessitatibus, libero.
                    </p>
                    <hr />
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="title">Visión</h4>
                    <p class="description-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, id, facilis blanditiis modi cumque sunt cum nam iure tenetur, ratione voluptatum commodi consequatur repudiandae temporibus nobis nihil quis qui impedit.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, illum quas culpa perspiciatis reiciendis libero rem ea saepe magnam fugiat nemo distinctio debitis ducimus ab accusantium sit dolores! Dicta, molestiae.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Principal -->
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
				<ul>
					<li>
						<a href="https://www.umg.edu.gt" target="_blank">
							UMG
						</a>
					</li>
				</ul>
            </nav>
            <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script> UMG - MEGAPROGRAMACIÓN
            </div>
        </div>
    </footer>

    <!-- Modal Login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
        
                            <div class="header header-primary text-center">
                                <h4 class="card-title">Iniciar Sesión</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                                <p class="description text-center">Ingrese sus datos</p>
                                {{-- Mensaje de Error si no se autentica antes el usuario y desea acceder a otra ruta --}}
                                @if (session()->has('flash'))
                                    <div class="alert alert-info">
                                        <div class="container">
                                            <div class="alert-icon">
                                                <i class="material-icons">info_outline</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            <b>Info:</b> {{session('flash')}}
                                        </div>
                                    </div>
                                @endif
                                <div class="card-content">
                                    {{-- Input usuario --}}
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Usuario*" name="username" value="{{ old('username') }}" required="true" autofocus>

                                        {{-- Mostrar mensaje de error --}}
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
        
                                    {{-- Input contraseña --}}
                                    <div class="input-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" placeholder="Contraseña*" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="true"/>
                                        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="category form-category">* Campos Requeridos</div>
                                </div>
                        </div>
                        <div class="modal-footer text-center">
                            <button class="btn btn-default btn-wd btn-lg" style="margin-bottom:10px;">Ingresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--  Fin Login -->

</body>

<!--   Scripts JS   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
<!--    Centro de Control para Material Kit: ripples, efectos parallax,  -->
<script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>


</html>