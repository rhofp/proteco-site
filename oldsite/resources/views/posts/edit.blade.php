@extends('layouts.layout')

@section('content')

<div class="section">

    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                {!! Form::model($class, ['method' => 'PATCH', 'url' => ['classes', $class->id]]) !!}
                @include('classes.partials.form', ['submitButton' => 'Editar'])
                {!! Form::close() !!}
                @include('errors.list')
            </div>
        </div>
    </div>

</div>

@endsection