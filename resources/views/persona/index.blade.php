@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('persona.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>NOMBRE</th>
                        <th>SEXO</th>
                        <th>TELEFONO</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>NACIONALIDAD</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($personas as $persona)
                            <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->ci }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->sexo }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->fecha_nac }}</td>
                                <td>{{ $persona->nacionalidad }}</td>
                                <td>
                                    <a href="{{ route('persona.edit', [$persona->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('persona.destroy', [$persona->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
