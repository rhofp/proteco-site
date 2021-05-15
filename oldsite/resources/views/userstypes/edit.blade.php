@extends('layouts.layout')

@section('content')

<div class="section">

    <div class="row">
        <div class="col s12">
            {!! Form::model($usertype, ['method' => 'PATCH', 'url' => ['userstypes', $usertype->id]]) !!}
            @include('userstypes.partials.form', ['submitButton' => 'Editar'])
            {!! Form::close() !!}
            @include('errors.list')
        </div>
    </div>

</div>

@endsection