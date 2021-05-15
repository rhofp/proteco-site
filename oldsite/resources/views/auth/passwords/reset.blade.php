@extends('layouts.layout')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12">
            <!--div class="card-panel white">
                {!! Form::open(['url' => '/password/reset']) !!}
                <div class="input-field">
                    {!! Form::email('email', $email or old('email'), ['class' => 'validate']) !!}
                    {!! Form::label('email', 'Correo', ['data-error' => 'Incorrecto']) !!}
                </div>
                <div class="input-field">
                    {!! Form::password('password') !!}
                    {!! Form::label('password', 'Contraseña') !!}
                </div>
                <div class="input-field">
                    {!! Form::password('password_confirmation', ['name' => 'password_confirmation']) !!}
                    {!! Form::label('password_confirmation', 'Confirmación de contraseña') !!}
                </div>
                <br>
                <button class="btn ptc waves-effect waves-light" type="submit">Reestablecer contraseña</button>
                {!! Form::close() !!}                
            </div-->
            @include('errors.list')
        </div>
    </div>
</div>

@endsection
