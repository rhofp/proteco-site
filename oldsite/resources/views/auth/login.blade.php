@extends('layouts.layout')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="card-panel red">
	    	<p><b>¡ATENCIÓN!</b> Si te registraste en esta página antes de Febrero del 2017, requerimos que te registres de nuevo con tus datos y número de cuenta.</p>
	    </div>
	    <div class="card-panel white">
                {!! Form::open(['url' => '/login']) !!}
                <div class="input-field">
                    {!! Form::email('email', old('email'), ['class' => 'validate']) !!}
                    {!! Form::label('email', 'Correo', ['data-error' => 'Incorrecto']) !!}
                </div>
                <div class="input-field">
                    {!! Form::password('password') !!}
                    {!! Form::label('password', 'Contraseña') !!}
                </div>
                <p>
                    <input type="checkbox" id="remember" name="remember"/>
                    <label for="remember">Recordar mis datos</label>
                </p>
                <br>
                {!! Form::button('Iniciar sesión', ['class' => 'btn ptc waves-effect waves-light', 'type' => 'submit']) !!}
		<p>
                	<b>¿Olvidaste tu contraseña?</b> Mándanos un correo con tu email y tu número de cuenta registrados en esta página a cursosproteco@gmail.com para ayudarte.
		</p>
		<!--a class="btn-flat waves-effect waves-light" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a-->
                {!! Form::close() !!}                
            </div>
            @include('errors.list')
        </div>
    </div>
</div>

@endsection
