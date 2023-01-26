@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <a href="{{ route('roles.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            <span style="margin-left: 5em">ROLES O MODULOS DE ACCESO QUE CADA USUARIO PUEDE ACCEDER</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>USUARIO</th>
                        <th>MÓDULO</th>
                        <th>NOMBRE RUTA</th>
                        {{-- <th>DESCRIPCION</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $rol)
                            <tr>
                                <td>{{ $rol->id }}</td>
                                <td>##{{ $rol->user->name }}##</td>
                                <td>{{ $rol->nombre_largo }}</td>
                                <td>{{ $rol->nombre_corto }}</td>
                                {{-- <td>{{ $rol->descripcion }}</td> --}}
                                <td>
                                    {{-- <a href="{{ route('roles.edit', [$rol->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                    <a href="{{ route('roles.destroy', [$rol->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
