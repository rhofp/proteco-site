<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PROTECO') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"/>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Francois+One|Fredoka+One|Lalezar" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cantora+One|Days+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Harmattan" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <!-- NAVBAR -->

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="{{asset('img/tipo.png')}}" alt="PROTECO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>
                <div class="my-2 my-lg-0">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Publicaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cursos y Talleres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Convocatoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cart.index') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        @if(Cart::instance('default')->count() >0 )
                                            <span class="badge badge-warning">
                                  {{ Cart::instance('default')->count() }}
                                </span>
                                        @endif
                                    </a>
                                </li>
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
            </div>
        </nav>

        <!-- Segunda Navbar )Para posicion:Fixed -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/"><img src="{{asset('img/tipo.png')}}" alt="PROTECO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>
                <div class="my-2 my-lg-0">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nuestro Trabajo
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Proyectos</a>
                                    <a class="dropdown-item" href="#">Publicaciones</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cursos y Talleres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Convocatoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Regístrarme') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cart.index') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        @if(Cart::instance('default')->count() >0 )
                                            <span class="badge badge-warning">
                                  {{ Cart::instance('default')->count() }}
                                </span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
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
            </div>
        </nav>
        <!-- ./NAVBAR -->

        <main class="py-4">
            @yield('content')
        </main>
        <div class="footercomplete">
            <footer>
                <div class="container">
                    <div class="page-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Contáctanos en:</p>
                                <a href="#"><img class="iconos" src="{{asset('img/iconos/png/5-fb.png')}}" alt="Facebook de PROTECO"></a>
                                <a href="#"><img  class="iconos"  src="{{asset('img/iconos/png/3-ig.png')}}" alt="Instagram de PROTECO"></a>
                                <a href="#"><img src="{{asset('img/iconos/png/4-tw.png')}}" alt="Twitter de PROTECO"></a>
                                <a href="#"><img class="iconos" src="{{asset('img/iconos/png/2-yt.png')}}" alt="YouTube de PROTECO"></a>
                                <a href="#"><img class="iconos" src="{{asset('img/iconos/png/1-sobre.png')}}" alt="Mail de PROTECO"></a>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <p>Ubicación:   Edificio Q "Luis G. Valdés Vallejo", 2do piso PROTECO, Anexo de Ingeniería, Ciudad Universitaria, Ciudad de México.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <p>Teléfono: 01 55 5622 3045</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="copyright">
                <p>© 2019 Programa de Tecnología en Cómputo. Universidad Nacional Autónoma de México. Facultad de Ingeniería. Todos los derechos reservados.</p>
            </div>
        </div>
        <!-- ./FOOTER -->
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
<script src="https://kit.fontawesome.com/d585d02092.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>


</html>
