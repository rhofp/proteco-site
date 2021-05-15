@extends('layouts.layout')

@section('content')

    <div class="section">

        <div class="row">
            <div class="col s12">
                @foreach($userstypes as $type)
                <p>
                    {{ $type->description }}
                </p>
                @endforeach
            </div>
        </div>

    </div>

@endsection