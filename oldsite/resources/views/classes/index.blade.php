@extends('layouts.layoutAdmin')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12">
            <span class='titulo'>Clases</span>
        </div>
        <div class="col s12">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Inscritos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classes as $class)
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->course->name }}</td>
                        <td>{{ date("d/m/Y", strtotime($class->startDate)) . ' al ' . date("d/m/Y", strtotime($class->endDate)) }}</td>
                        <td>{{ $class->currentQuota . ' de ' . $class->maxQuota}}</td>
                        <td><a href="{{ url("admin/classes/list/" . $class->id) }}" target="_blank">Ver lista</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection