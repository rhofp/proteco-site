@extends('layouts.layout')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                {!! Form::open(['url' => '/register']) !!}
                <div class="row">
                    <div class="col l4 m12 s12">
                        <div class="input-field">
                            {!! Form::text('name', old('name'), ['class' => 'validate']) !!}
                            {!! Form::label('name', 'Nombre(s) *') !!}
                        </div>
                    </div>
                    <div class="col l4 m12 s12">
                        <div class="input-field">
                            {!! Form::text('firstLastName', old('firstLastName'), ['class' => 'validate']) !!}
                            {!! Form::label('firstLastName', 'Apellido paterno *') !!}
                        </div>
                    </div>
                    <div class="col l4 m12 s12">
                        <div class="input-field">
                            {!! Form::text('secondLastName', old('secondLastName'), ['class' => 'validate']) !!}
                            {!! Form::label('secondLastName', 'Apellido materno *') !!}
                        </div>
                    </div>
                    <div class="col l12 m12 s12">
                        <div class="input-field">
                            {!! Form::email('email', old('email'), ['class' => 'validate']) !!}
                            {!! Form::label('email', 'Correo *', ['data-error' => 'Incorrecto']) !!}
                        </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="input-field">
                            {!! Form::password('password') !!}
                            {!! Form::label('password', 'Contraseña *') !!}
                        </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="input-field">
                            {!! Form::password('password_confirmation', ['name' => 'password_confirmation']) !!}
                            {!! Form::label('password_confirmation', 'Confirmación de contraseña *') !!}
                        </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="input-field">
                            <select name="usertype" id="usertype">
                                <option value="" disabled selected>Elige</option>
                                <option value="1">Miembro UNAM</option>
                                <option value="2">Estudiante externo</option>
                                <option value="3">Público general</option>
                            </select>
                            {!! Form::label('usertype', 'Procedencia *') !!}
                        </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="input-field" id='accountdiv'>
                            {!! Form::text('account', old('account'), ['class' => 'validate', 'id' => 'account', 'disabled' => 'disabled']) !!}
                            {!! Form::label('account', 'Número de cuenta', ['id' => 'accountT']) !!}
                        </div>
                    </div>
                </div>
                <button id="register" class="btn ptc waves-effect waves-light" type="submit">Regístrate</button>
                <p>* Campos obligatorios</p>
                {!! Form::close() !!}   
            </div>
            @include('errors.list')
        </div>
    </div>
</div>

@endsection
