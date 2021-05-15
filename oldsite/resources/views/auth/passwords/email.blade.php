@extends('layouts.layout')

@section('content')
<div class="section">
    <div class="row">
        <div class="col s12">
            <!--div class="card-panel white">
                {!! Form::open(['url' => '/password/email']) !!}
                <div class="input-field">
                    {!! Form::email('email', old('email'), ['class' => 'validate']) !!}
                    {!! Form::label('email', 'Correo', ['data-error' => 'Incorrecto']) !!}
                </div>
                <br>
                <button class="btn ptc waves-effect waves-light" type="submit">Enviar enlace de restablecimiento</button>
                {!! Form::close() !!}                
            </div-->
        </div>
    </div>
</div>

@include('errors.list')

@endsection
