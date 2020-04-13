<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PROTECO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    @yield('styles')
    <link rel="shortcut icon" href="{{asset('img/protlog.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|PT+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg p-0 container-fluid navbar-dark shadow">
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="ml-3 pt-2 pb-2" src="{{asset('img/tipo.png')}}" alt="">
            </a>
            <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end mr-3 pt-2 pb-2" id="navbarTogglerDemo02">
                <!-- mt-2 mt-lg-0 -->
                <ul class="navbar-nav">
                    <li class="nav-item mr-5 ml-sm-3 d-none d-md-inline">
                        <form class="form-inline mt-1">
                            <input type="text" class="form-control" id="nav-s" placeholder="¿Qué quieres aprender?">
                            <div class="input-group-append">
                                <button class="btn btn-light" id="but-s" type="button">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>
                    </li>
                    <!--router-link class="nav-item mr-1 ml-3" tag="li" :to="{name:'root'}"> 
                        <a href="#" class="nav-link">Inicio</a>
                    </router-link-->    
                    <router-link class="nav-item mr-1 ml-3" tag="li" :to="{name:'cursos'}"> 
                        <a href="#" class="nav-link">Cursos</a>
                    </router-link>  
                    <router-link class="nav-item mr-1 ml-3" tag="li" :to="{name:'convocatoria'}"> 
                        <a href="#" class="nav-link">Convocatoria</a>
                    </router-link>  
                    @guest
                    <router-link class="nav-item mr-1 ml-3" tag="li" :to="{name:'login'}"> 
                            <a href="#" class="nav-link">Iniciar sesión</a>
                        </router-link>  
                    @else
                        <li class="nav-item mr-1 ml-3">
                            <a class="nav-link" href="#">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>
                        <!-- Vista para el usuario -->
                        <li class="nav-item mr-1 ml-3  dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Nombre del usuario
                            </a>
                            <div class="pull-right dropdown-menu dropdown-menu-right mt-2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Mis cursos</a>
                                <a class="dropdown-item" href="#">Salir </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    @endguest
                </ul>
                <!-- my-2 my-lg-0 -->
            </div>
        </nav>

        <main class="mb-3">
            @yield('content')
        </main>

        <footer class="pt-3">
            <h6>Contactanos en: </h6>
            <div class="container redes mt-3">
                <a href="https://www.facebook.com/proteco/" target="_blank" title="Síguenos en Facebook">
                    <img class="mr-3" src="{{asset('img/icons/005-boton-del-logo-de-facebook.png')}}" alt="">
                </a>
                <a href="https://www.instagram.com/protecounam/" target="_blank" title="Síguenos en Instagram">
                    <img class="mr-3" src="{{asset('img/icons/003-logo-de-instagram.png')}}" alt="">
                </a>
                <a href="https://twitter.com/proteco?lang=es" target="_blank" title="Síguenos en Twitter">
                    <img class="mr-3" src="{{asset('img/icons/004-boton-de-logo-del-twitter.png')}}" alt="">
                </a>
                <a href="https://www.youtube.com/channel/UCSEngCSxjHdCDFxK-gzwsxw" target="_blank"
                   title="Visita nuestro canal de Youtube">
                    <img class="mr-3" src="{{asset('img/icons/002-logo-de-youtube.png')}}" alt="">
                </a>
                <a href="mailto:cursosproteco@gmail.com?" target="_blank" title="Envíanos un correo">
                    <img class="mr-3" src="{{asset('img/icons/001-sobre-cerrado.png')}}" alt="">
                </a>
            </div>
            <div class="container mt-3 ">
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <a href="#">
                            <p>Ubicación: Edificio Q "Luis G. Valdés Vallejo", 2do piso PROTECO, Anexo de Ingeniería,
                                Ciudad Universitaria, Ciudad de México.</p>
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Teléfono: 01 55 5622 3045</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-3 pb-2">
                <p>© 2020 Programa de Tecnología en Cómputo. Universidad Nacional Autónoma de México. Facultad de Ingeniería.
                    Todos los derechos reservados.</p>
                <p id="aviso">Aviso de privacidad: El Programa de Tecnología en Cómputo, con domicilio en Edificio Q
                    "Luis G. Valdés Vallejo", 2do piso, Anexo de Ingeniería, Ciudad Universitaria utilizará sus datos
                    personales aquí recabados únicamente para identificarlo y enviarle información de su interés.
                    Para mayor información acerca del tratamiento de datos usted puede visitar nuestras oficinas en la
                    dirección previamente mencionada.</p>
            </div>
        </footer>

    </div>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
@yield('scripts')
</html>
