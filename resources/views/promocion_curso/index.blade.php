@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('promocion_curso.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CURSO</th>
                        <th>PROMOCION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($promocion_cursos as $promocion_curso)
                            <tr>
                                <td>{{ $promocion_curso->id }}</td>
                                <td>{{ $promocion_curso->cursos->codigo }}</td>
                                <td>{{ $promocion_curso->promociones->id }}</td>
                                <td>
                                    <a href="{{ route('promocion_curso.edit', [$promocion_curso->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('promocion_curso.destroy', [$promocion_curso->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
