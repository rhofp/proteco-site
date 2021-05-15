@extends('layouts.layout')

@section('content')

<div class="section">

    <div class="row">
        <div class="col s12">
            <div class="card-panel white">
                {!! Form::open(['url' => '/classes']) !!}
                @include('classes.partials.form', ['submitButton' => 'Agregar'])
                {!! Form::close() !!}
            </div>
            @include('errors.list')
        </div>
    </div>

</div>

@endsection