<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Programa de Tecnología en Cómputo</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset("css/materialize.min.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset("css/materialize.clockpicker.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset("css/style.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <header>            
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="{{ url('/login') }}">Inicia sesión</a></li>
                <li><a href="{{ url('/register') }}">Regístrate</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="{{ url('/perfil') }}">Mi perfil</a></li>
                @if (Auth::check() && Auth::user()->usertype_id == 5)
                <li><a href="{{ url('/admin') }}">Administrador</a></li>
                @endif
                <li><a href="{{ url('/logoutFlush') }}">Logout</a></li>
            </ul>
            <ul id="dropdown3" class="dropdown-content">
                <li><a href="{{ url('/login') }}">Inicia sesión</a></li>
                <li><a href="{{ url('/register') }}">Regístrate</a></li>
            </ul>
            <ul id="dropdown4" class="dropdown-content">
                <li><a href="{{ url('/perfil') }}">Mi perfil</a></li>
                @if (Auth::check() && Auth::user()->usertype_id == 5)
                <li><a href="{{ url('/admin') }}">Administrador</a></li>
                @endif
                <li><a href="{{ url('/logoutFlush') }}">Logout</a></li>
            </ul>
            <div class="navbar-fixed">
                <nav class="white" role="navigation">
                    <div class="nav-wrapper container">
                        <a href="{{ url("") }}" class="brand-logo">
                            <img src="{{ asset("img/tipo.png") }}">
                        </a>
                        <ul class="right hide-on-med-and-down">
                            <!--<li class="{{ Request::is('blog') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("blog") }}">Blog</a></li>-->
                            <li class="{{ Request::is('cursos') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("cursos") }}">Cursos</a></li>
                            <li class="{{ Request::is('convocatoria') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("convocatoria") }}">Convocatoria</a></li>
                            @if (Auth::guest())
                            <li><a class="dropdown-button ptc-text" data-activates="dropdown1">Entrar<i class="material-icons right">arrow_drop_down</i></a></li>
                            @else
                            <li><a class="dropdown-button ptc-text" data-activates="dropdown2">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                            @endif
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            <!--<li class="{{ Request::is('blog') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("blog") }}">Blog</a></li>-->
                            <li class="{{ Request::is('cursos') ? 'active' : '' }}"><a href="{{ url("cursos") }}">Cursos</a></li>
                            <li class="{{ Request::is('convocatoria') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("convocatoria") }}">Convocatoria</a></li>
                            @if (Auth::guest())
                            <li><a class="dropdown-button ptc-text" data-activates="dropdown3">Entrar<i class="material-icons right">arrow_drop_down</i></a></li>
                            @else
                            <li><a class="dropdown-button ptc-text" data-activates="dropdown4">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                            @endif
                        </ul>
                        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons ptc-text">menu</i></a>
                    </div>  
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer class="page-footer grey lighten-3">
            <div class="container">
                <div class="row">
                    <div class="col l4 m12 s12">
                        <span class="titulo">
                            ¿Quiénes somos?
                        </span>
                        <p>
                            El Programa de Tecnología en Cómputo busca establecer un proceso permanente, con herramientas de
                            cómputo, para la
                            formación de personal docente y de investigación, en las diferentes áreas de las
                            Divisiones de la Facultad de Ingeniería, mediante la participación de los integrantes
                            en cursos especializados y en el desarrollo de proyectos.
                        </p>
                        <p class="center">
                            <a href="https://www.facebook.com/proteco" target="_blank">Facebook</a> -
                            <a href="https://www.twitter.com/proteco" target="_blank">Twitter</a> -
                            <a href="https://www.instagram.com/protecounam" target="_blank">Instagram</a> -
                            <a href="https://www.youtube.com/channel/UCSEngCSxjHdCDFxK-gzwsxw" target="_blank">Youtube</a>
                        </p>
                    </div>
                    <div class="col l4 m12 s12">
                        <span class="titulo">
                            Contacto
                        </span>
                        <p>
                            <span class="ptc-text">Ubicación:</span> Edificio Q "Luis G. Valdés Vallejo", 2do piso PROTECO,
                            Anexo de Ingeniería, Ciudad Universitaria, Ciudad de México.                            
                        </p>
                        <p class="center">
                            <a href="https://maps.google.com.mx/?ie=UTF8&amp;t=m&amp;ll=19.328932,-99.181813&amp;spn=0.003543,0.00456&amp;z=17&amp;iwloc=lyrftr:m,5369879802508329851,19.327905,-99.181808&amp;source=embed" target="_blank">Google Maps</a>
                        </p>
                        <p>
                            <span class="ptc-text">Teléfono:</span> 56-22-30-45 y 56-22-38-99 ext. 44174.
                        </p>
                        <!--p>
                            <span class="ptc-text">Whatsapp:</span> 55-32-86-06-30.
                        </p-->
                        <p>
                            <span class="ptc-text">Correo electrónico:</span> cursosproteco@gmail.com
                        </p>
                    </div>
                    <!--div class="col l4 m12 s12">
                        <span class="titulo">
                            Deja un mensaje
                        </span>
                        <form>
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email" class="validate">
                                <label for="email">Correo</label>
                            </div>
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Mensaje</label>
                            </div>
                            <button type="submit" name="submit" class="waves-effect waves-light btn right ptc">Enviar</button>
                        </form>
                    </div-->
                    <div class="col l12 m12 s12">
                        <p style="font-size: 12px">
                            <b>Aviso de privacidad: </b>El Programa de Tecnología en Cómputo, con domicilio en Edificio Q "Luis G. Valdés Vallejo",
                            2do piso, Anexo de Ingeniería, Ciudad Universitaria utilizará
                            sus datos personales aquí recabados únicamente para identificarlo y enviarle información de su
                            interés. Para mayor información acerca del tratamiento de datos usted puede visitar nuestras
                            oficinas en la dirección previamente mencionada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center black-text">
                    © {{ date("Y") }} Programa de Tecnología en Cómputo. Universidad Nacional Autónoma de México. Facultad de
                    Ingeniería. Todos los derechos reservados.
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset("js/materialize.min.js") }}"></script>
        <script src="{{ asset("js/materialize.clockpicker.js") }}"></script>
        <script src="{{ asset("js/init.js") }}"></script>
        <script src="{{ asset("js/masonry.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
    </body>
</html>
