@extends('layouts.layoutAdmin')

@section('content')

<div class="section">
    <div class="row">
        <div class="col s12">
            <span class='titulo'>Inscripciones</span>
        </div>
        <div class="col s12 m12 l12" id="inscriptionContent" style="display: none"></div>    
        <div id="modalContent"></div>    
        <div class="col s12">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Procedencia</th>
                        <th>Cuenta</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Inscripciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->usertype()->first()->description }}</td>
                        <td>{{ $user-> account }}</td>
                        <td>{{ $user->name . " " . $user->firstLastName . " " . $user->secondLastName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->inscriptions()->get()->count() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection