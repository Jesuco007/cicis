@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('usuarios.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>TIPO</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->tipo }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', [$usuario->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('usuarios.destroy', [$usuario->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
