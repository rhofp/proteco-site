<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="none"/>
        <title>Programa de Tecnología en Cómputo</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset("css/materialize.min.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset("css/materialize.clockpicker.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset("css/style.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset("css/styleAdmin.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.css"/>
    </head>
    <body>
        <header>  
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="{{ url('') }}">Regresar</a></li>
                <li><a href="{{ url('/logoutFlush') }}">Logout</a></li>
            </ul>
            <ul id="dropdown4" class="dropdown-content">
                <li><a href="{{ url('') }}">Regresar</a></li>
                <li><a href="{{ url('/logoutFlush') }}">Logout</a></li>
            </ul>
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a href="{{ url("admin") }}" class="brand-logo">
                        <img src="{{ asset("img/tipo.png") }}">
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button ptc-text" data-activates="dropdown2">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <ul id="slide-out" class="side-nav fixed">
                        <li class="{{ Request::is('admin/classes') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/classes") }}">Clases</a></li>
                        <li class="{{ Request::is('admin/inscriptions') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/inscriptions") }}">Inscripciones</a></li>
                        <li class="{{ Request::is('admin/posts') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/posts") }}">Posts</a></li>
                        <li class="{{ Request::is('admin/tags') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/tags") }}">Tags</a></li>
                        <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/users") }}">Usuarios</a></li>
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li class="{{ Request::is('admin/classes') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/classes") }}">Clases</a></li>
                        <li class="{{ Request::is('admin/inscriptions') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/inscriptions") }}">Inscripciones</a></li>
                        <li class="{{ Request::is('admin/posts') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/posts") }}">Posts</a></li>
                        <li class="{{ Request::is('admin/tags') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/tags") }}">Tags</a></li>
                        <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a class="ptc-text" href="{{ url("admin/users") }}">Usuarios</a></li>
                        <li><a class="dropdown-button ptc-text" data-activates="dropdown4">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons ptc-text">menu</i></a>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset("js/materialize.min.js") }}"></script>
        <script src="{{ asset("js/materialize.clockpicker.js") }}"></script>
        <script src="{{ asset("js/init.js") }}"></script>
        <script src="{{ asset("js/masonry.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.js"></script>
    </body>
</html>
