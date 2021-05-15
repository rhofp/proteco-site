@extends('layouts.layout')

@section('content')

    <div class="section">
        <div class="row">
            <div class="col s12 m12 l6">
                  <span class="titulo">
                      Convocatoria
                  </span>
                <p>
                    La Facultad de Ingeniería convoca a los alumnos de todas las carreras de
                    Ingeniería a participar en el concurso para la selección de candidatos a su programa
                    de becarios denominado: “Programa de Tecnología en Cómputo”.
                </p>
                <br>
                <span class="titulo">
                    OBJETIVO DEL PROGRAMA
                </span>
                <p>
                    Establecer un proceso permanente, con herramientas de cómputo, para la
                    formación de personal docente y de investigación, en las diferentes áreas de las
                    Divisiones de la Facultad de Ingeniería, mediante la participación de los integrantes
                    en cursos especializados y en el desarrollo de proyectos. Así también los seleccionados
                    y subsecuentes serán semilla para nuevas generaciones de becarios.
                </p>
            </div>
            <div class="col s12 m12 l6">
                  <span class="titulo">
                      Ingreso al PROTECO
                  </span>
                <p>
                    Para iniciar el proceso de ingreso al PROTECO sigue los siguientes pasos:
                    <br><br>
                    1) Imprime la solicitud de inscripción y la carta compromiso.
                    <br>
                    2) Llénalos correctamente con tus datos.
                    <br>
                    3) Entrégalos en las fechas indicadas en el cubículo del PROTECO.
                    <br><br>
                    Documentos descargables para el ingreso al PROTECO:
                <ul class="collection with-header">
                    <li class="collection-item"><div>Convocatoria<a href="{{ url('archivos/convocatoria.pdf') }}" class="secondary-content"><i class="material-icons">file_download</i></a></div></li>
                    <li class="collection-item"><div>Solicitud de inscripción<a href="{{ url('archivos/solicitud-de-inscripcion.pdf') }}" class="secondary-content"><i class="material-icons">file_download</i></a></div></li>
                    <li class="collection-item"><div>Carta compromiso<a href="{{ url('archivos/carta-compromiso.pdf') }}" class="secondary-content"><i class="material-icons">file_download</i></a></div></li>
                </ul>
                </p>
            </div>
            
            
            <div class="col s12 center">
                <a class="waves-effect waves-light ptc btn-large" target="_blank" href="{{ url("archivos/aceptados.pdf") }}">Aceptados generación 40</a>
            </div>
        
            
            
            
        </div>
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="card-panel ptc">
                    <span class="white-text">
                        <img class="responsive-img" src="{{ asset('img/cartel.jpg') }}">
                    </span>
                </div>
            </div>
        </div>
    </div>

@endsection
