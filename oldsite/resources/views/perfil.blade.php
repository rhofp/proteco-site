@extends('layouts.layout')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12 m12 l12">
            <span class="titulo">
                Mi perfil
            </span>
            <ul class="collection with-header">
                <li class="collection-header"><h4>{{$user->name ." ". $user->firstLastName . " ". $user->secondLastName}}</h4></li>
                <li class="collection-item">Número de cuenta / RFC: {{$user->account}}</li>
                <li class="collection-item">Procedencia: {{$user->usertype->description}}</li>
                <li class="collection-item">Correo: {{$user->email}}</li>
            </ul>
        </div>
        @if(count($inscriptions))
        <div class="col s12 m12 l12">
            <span class="titulo">
                Mis cursos
            </span>
            @foreach($inscriptions as $row)
            <div class="card-panel @if($row->state_id == 1) ptc @elseif($row->state_id == 2) ptc @elseif($row->state_id == 3) orange @elseif($row->state_id == 5) red @endif">
                <div class="row">
                    <div class="col l6 m12 s12">
                        <span class="titulo white-text">Cursos inscritos</span>
                        <p class="white-text">
                            1. Clic al boton "GENERAR COMPROBANTE".<br>
                            2. Realiza tu pago en cajas. <br>
                            3. Entrega tus papales en PROTECO.<br>
                            4. Revisa el estado de tu inscripción: 
                            @if($row->state_id == 1) 
                            <span class="chip">Pagado</span>
                            @elseif($row->state_id == 2) 
                            <span class="chip">Becado</span>
                            @elseif($row->state_id == 3) 
                            <span class="chip">Pago parcial</span>
                            @elseif($row->state_id == 5) 
                            <span class="chip white grey-text text-darken-4">Pendiente</span>
                            @endif
                        </p>
                        <a class="waves-effect btn white grey-text text-darken-4" href="{{url('recibo/' . $row->id)}}" target="_blank">GENERAR COMPROBANTE</a>
                        @if($row->state_id == 5) 
                        <a class="modal-trigger waves-effect btn white grey-text text-darken-4" href="#modal{{ $row->id}}">DAR DE BAJA</a>
                        <div id="modal{{ $row->id}}" class="modal">
                            <div class="modal-content">
                                <h4>¿Dar de baja todos los cursos de la inscripción con el folio: {{$row->id }}?</h4>
                                <p>Si aún no realizas el pago de los cursos SÍ PUEDES DAR DE BAJA. <br>
                                    Si ya realizaste el pago y entregaste papeles NO PUEDES DAR DE BAJA.</p>
                            </div>
                            <div class="modal-footer">
                                <a href="{{url('bajaInscripcion/' . $row->id)}}" class="modal-action modal-close waves-effect waves-green btn-flat ">DAR DE BAJA</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col l6 m12 s12">
                        <span class="titulo white-text">Folio: {{$row->id }}</span>
                        <ul class='collection' id='cartElement'>
                            @foreach($row->classes()->get() as $subrow)
                            <li class='collection-item avatar'>
                                <p>
                                    {{$subrow->course->name}}<br>
                                    Fecha: {{date("d/m/Y", strtotime($subrow->startDate)) . " al ". date("d/m/Y", strtotime($subrow->endDate))}} <br>
                                    Horario: {{$subrow->startTime . " a " . $subrow->endTime}}<br>
                                    Días: {{$subrow->days}}<br>
                                </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

@endsection