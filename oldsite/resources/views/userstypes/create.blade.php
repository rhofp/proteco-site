@extends('layout')

@section('content')

<div class="section">

    <div class="row">
        <div class="col s12">
            {!! Form::open(['url' => 'userstypes']) !!}
            @include('userstypes.partials.form', ['submitButton' => 'Agregar'])
            {!! Form::close() !!}
            @include('errors.list')
        </div>
    </div>

</div>

@endsection