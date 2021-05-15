@extends('layouts.layout')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12 m12 l8 offset-l2 center">  
            <span class="titulo red-text" style="font-size:300%;">
                <br>
                ¡Todos los cursos al 50%!
                <br><br>
            </span>
        </div>
        <div class="col s12 m12 l12">
            <span class="titulo">
                Cursos intersemestrales
            </span>
        </div>
        <div class="col s12 m12 l8 offset-l2 center">
            <span class="titulo">
                Buscar
            </span>
            <div class="input-field">
                <input id="courseSearch" placeholder="Nombre del curso" data-id="courseSearch" type="text">
            </div>
            @if (Auth::guest())
            <!--a data-delay="50" data-tooltip="Inicia sesión o regístrate para comprar" data-position="bottom" class="tooltipped disabled btn-large">Comprar arduino uno</a>
            <a data-delay="50" data-tooltip="Inicia sesión o regístrate para comprar" data-position="bottom" class="tooltipped disabled btn-large">Comprar raspberry pi</a-->
            @elseif(Auth::user()->usertype_id == 1 || Auth::user()->usertype_id == 2 || Auth::user()->usertype_id == 3 || Auth::user()->usertype_id == 5)
            <!--a href="{{ url("arduino") }}" target="_blank" class="waves-effect waves-light btn-large teal">Comprar arduino uno</a>
            <a href="{{ url("raspberry") }}" target="_blank" class="waves-effect waves-light btn-large red">Comprar raspberry pi</a-->
            @endif
        </div>
        <div class="col s12 m12 l12" id="myCourses" style="display:none">
            <div class="card-panel ptc">
                <div class="row">
                    <div class="col l6 m12 s12">
                        <span class="titulo white-text">Pasos para inscribir:</span>
                        <p class="white-text">
                            1. AGREGA todos los cursos que desees inscribir.<br>
                            2. Clic al botón INSCRIBIR y verifica los datos.<br>
                            3. En MI PERFIL clic al botón GENERAR COMPROBANTE.<br>
                            4. Realiza tu pago. <br>
                            5. Agrega al comprobante tu firma, identificación y ficha de pago. <br>
                            6. ESCANÉA el comprobante. <br>
                            7. Envíalo a cursosproteco+inscripciones@gmail.com <br>
                            8. Espera al correo de respuesta para validar tu inscripción. <br>
                        </p>
                        <br>
                        <a id="buttonConfirmCart" class="waves-effect btn white grey-text text-darken-4 modal-trigger" href="#modal1" data-url="{{url('confirm')}}">Inscribir</a>
                        <br><br>
                        <div class="card-panel white center">
                            <span>PROMOCIÓN: !TODOS LOS CURSOS AL 50%!</span>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal bottom-sheet">
                            <div class="modal-content">
                                <h4>Confirma tu inscripción</h4>
                                <ul class="collection" id="confirmCart"></ul>
                                <h4 id="totalCart"></h4>
                            </div>
                            <div class="modal-footer">
                                <a href="{{url('inscribir')}}" class=" modal-action modal-close waves-effect waves btn-large ptc">Inscribir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m12 s12" id="cartContent">
                        <span class="titulo white-text">Mis cursos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid row">
        <div class="grid-sizer col s12 m4 l4"></div>
        @foreach($classes as $class) 
        <!-- @if($class->maxQuota > $class->currentQuota) -->
        <div class="grid-item {{ mb_strtolower($class->course->name) }} col s12 m4 l4">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('img/cursos/' . $class->course->image)}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator name">{{ $class->course->name }}</span>
                    <p>
                        Fecha: </span>{{ date("d/m/Y", strtotime($class->startDate)) . ' al ' . date("d/m/Y", strtotime($class->endDate)) }}<br>
                        Horario: </span>{{ $class->startTime . ' a ' . $class->endTime }}
                    </p>
                </div>
                <div class="card-action">
                    @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Inicia sesión o regístrate para poder inscribirte">Iniciar sesión</a>
                    @elseif(Auth::user()->usertype_id == 1 || Auth::user()->usertype_id == 2 || Auth::user()->usertype_id == 3 || Auth::user()->usertype_id == 5)
                    <a class="addCart" data-url="{{ url('/addCart') }}" data-id="{{ $class->id }}" style="cursor:pointer">Agregar</a>
                    @endif
                    <a target="_blank" href="{{ url('temarios/' . $class->course->syllabus) }}">Temario</a>
                    <a style="cursor:pointer" class="activator">Detalles</a>
                </div>
                <div class="card-reveal">
                    <span class="card-title"  style="display: inline">Antecedentes: <i class="material-icons right">close</i></span>{{$class->course->background}}
                    <br>
                    <span class="card-title"  style="display: inline">Material: </span>{{$class->course->material}}
                    <br>
                    <span class="card-title"  style="display: inline">Fecha: </span>{{ date("d/m/Y", strtotime($class->startDate)) . ' al ' . date("d/m/Y", strtotime($class->endDate)) }}
                    <br>
                    <span class="card-title"  style="display: inline">Horario: </span>{{ $class->startTime . ' a ' . $class->endTime }} ({{$class->course->hours}} ) 
                    <br>
                    <span class="card-title"  style="display: inline">Días: </span>{{ $class->days }}
                    <br>
                    <span class="card-title"  style="display: inline">Lugar: </span>{{ $class->place->description }}
                    <br>
                    <span class="card-title"  style="display: inline">Cupo disponible: </span>{{ $class->maxQuota - $class->currentQuota }}
                    <br>
                    <span class="card-title"  style="display: inline">Costo UNAM: </span>${{ $class->cost1 }}
                    <br>
                    <span class="card-title"  style="display: inline">Costo alumno externo: </span>${{ $class->cost2 }}
                    <br>
                    <span class="card-title"  style="display: inline">Costo público general: </span>${{ $class->cost3 }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="section">
    <div class="row">
        <div class="col s12 m12 l6">
            <span class="titulo">
                Inscripciones
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Cuál es el procedimiento de inscripción para los cursos
                        intersemestrales?
                    </div>
                    <div class="collapsible-body">
                        <p>
                            1. Registrarse en la página.<br>
                            2. Inscribirte a los cursos que desees.<br>
                            3. Generar el recibo de pago en PDF.<br>
                            4. Realizar tu pago.<br>
                            5. Envía escaneado tu comprobante a cursosproteco+inscripciones@gmail.com con:<br>
                            <br>
                            - Ticket de pago.<br>
                            - Credencial UNAM o identificación oficial.<br><br>

                            *Para asegurar lugar en el curso, el comprobante se tiene que enviar en las primeras 24 horas de hecho el pago.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿La inscripción de los cursos es en línea o presencial?</div>
                    <div class="collapsible-body">
                        <p>
                            1. La inscripción para los cursos intersemestrales es en línea.<br>
                            2. El pago se realiza personalmente en las cajas de la Facultad de Ingeniería, Ciudad Universitaria.<br><br>

                            *Debido a la situación actual, el pago se realiza depositando a una cuenta bancaria. 
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Si quiero tomar el paquete de tres cursos ¿cómo me inscribo?</div>
                    <div class="collapsible-body">
                        <p>
                            1. Ingresa a la página de inscripciones.<br>
                            2. Selecciona los tres cursos que quieras.<br>
                            3. El sistema te genera automáticamente la cantidad a pagar por los paquetes que seleccionaste.<br>
                            4. Inscríbete.<br>
                            5. Genera tu recibo de pago y acude a las cajas para pagar.<br><br>

                            *Debido a la situación actual,el pago se realiza depositando a una cuenta bancaria
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col s12 m12 l6">
            <span class="titulo">
                Cursos
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Quiénes imparten los cursos?</div>
                    <div class="collapsible-body">
                        <p>
                            Becarios de PROTECO que actualmente estudian en la 
                            Facultad de Ingeniería y egresados. 
                            <br><br>
                            PROTECO se ha 
                            caracterizado por brindar un servicio de calidad 
                            llevando en alto el nombre y los valores de la 
                            Máxima Casa de Estudios.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Qué obtengo al finalizar el curso?</div>
                    <div class="collapsible-body">
                        <p>
                            Si acreditas el curso con calificaciones mayor o igual a 8.0 
                            y tienes el 80% de asistencia, 
                            se te entrega una constancia de asistencia al curso, avalada 
                            por la Facultad de Ingeniería, UNAM.
                            <br><br>
                            Las constancias son expedidas por el Coordinador General de Proteco, M.I. Angel César
                            Govantes y firmadas por él y el Jefe de Departamento de Ingeniería en Computación, Ing. Alberto Templos Carbajal
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Qué pasa si no me han entregado mi constancia?</div>
                    <div class="collapsible-body">
                        <p>
                            En caso de que hayas acreditado un curso y no se te haya entregado tu constancia 
                            y la requieras para algún reporte de tu trabajo o como justificante, 
                            debes de mandar un correo a cursosproteco@gmail.com y a govantes@unam.mx 
                            para que se revise tu caso. <br><br>

                            *Por el momento no se pueden expedir constancias ya que la Facultad se encuentra cerrada. 
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Si deseo un reembolso por el curso al que estoy inscrito?</div>
                    <div class="collapsible-body">
                        <p>
                            Tienes que redactar una carta donde expreses tus motivos,
                            escribir el monto del reembolso en la carta y traer el ticket original de pago que te dieron en las cajas de la facultad.
                            Debes entregar estos papeles en el cubículo del PROTECO. 
                            Si no puedes asistir a uno de los cursos que te inscribiste, debes avisarnos 24 horas antes del inicio del curso
                            inscrito para que te podamos validar el reembolso.<br><br>

                            *Debido a la situación actual, por el momento no hay reembolsos ya que la Facultad se encuentra cerrada. 
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l6">
            <span class="titulo">
                Pagos
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿A partir de cuándo y hasta cuando puedo pagar?</div>
                    <div class="collapsible-body">
                        <p>
                            A partir del momento en que generes tu recibo y tienes 24 horas para pagar y enviar tu comprobante a cursosproteco+inscripciones@gmail.com
                            <br><br>
                            Te recomendamos que pagues lo antes posible ya que tu 
                            inscripción en linea no asegura tu lugar. Tenemos cupo limitado y 
                            los lugares se acaban. :(        
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Para inscribirme, puedo hacer varios pagos?</div>
                    <div class="collapsible-body">
                        <p>
                            1. Si te inscribes a un paquete de tres cursos, mínimo debes 
                            liquidar un curso completo para apartar tu lugar en ese curso.
                            <br>
                            2. Deberás liquidar el resto de la cantidad a más tardar un día 
                            antes de que comiencen los cursos faltantes y entregar el comprobante
                            de pago 3 días antes de que empiece el primer curso.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Puedo pagar mi inscripción con tarjeta de débito o crédito?</div>
                    <div class="collapsible-body">
                        <p>
                            Sujeto a disponibilidad.
                            <br><br>
                            El pago se realiza directamente en las cajas de la Facultad de Ingeniería, Ciudad Universitaria. <br><br>

                            *Debido a la situación actual, no hay pagos en las cajas de Ciudad Universitaria.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col s12 m12 l6">
            <span class="titulo">
                Contacto
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Dónde está la Facultad de Ingeniería de la UNAM?</div>
                    <div class="collapsible-body">
                        <p>
                            Dirección: Av Universidad 3000, Ciudad Universitaria, 
                            Coyoacán, 04510 Ciudad de México, Distrito Federal.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Dónde está el área del PROTECO?</div>
                    <div class="collapsible-body">
                        <p>
                            El área del PROTECO se encuentra en el 2do piso del 
                            edificio "Luis G. Valdés Vallejo" ubicado en el Anexo de Ingeniería.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header">¿Dónde se impartirán los cursos intersemestrales?</div>
                    <div class="collapsible-body">
                        <p>
                            En el Anexo de la Facultad de Ingeniería en Av Universidad 3000, Ciudad Universitaria, Coyoacán, 04510 Ciudad de México, Distrito Federal.
                            <br><br>
                            *En el periodo de Junio 2020, los cursos se llevarán a cabo en línea, por medio de diferentes plataformas. 
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l6">
            <span class="titulo">
                Equipo
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Y si no puedo llevar mi computadora?</div>
                    <div class="collapsible-body">
                        <p>
                            1. No te preocupes. ;)<br>
                            2. En el PROTECO contamos con salas equipadas con el equipo de cómputo necesario para impartir los cursos.<br>
                            3. Inscríbete. :)<br><br>
                            Si es necesario traerla, se te avisará con tiempo.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col s12 m12 l6">
            <span class="titulo">
                Fechas
            </span>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">¿Cuándo son los cursos?</div>
                    <div class="collapsible-body">
                        <p>
                            Los cursos se celebran en el periodo intersemestral de la UNAM. 
                            Durante el semestre se imparten cursos sabatinos y en horario vespertino. 
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


@endsection
