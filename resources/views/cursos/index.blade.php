@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        @if(auth()->user()->tipo !== 'EST')
        <div class="col s4">
            <a href="{{ route('cursos.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        @endif
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>DURACION</th>
                        <th>REQUISITO</th>
                        <th>NIVEL</th>
                        <th>ESTADO</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->cursos->codigo }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->cursos->duracion }}</td>
                                <td>{{ $item->cursos->requisito }}</td>
                                <td>{{ $item->cursos->nivel }}</td>
                                <td>{{ $item->estado }}</td>
                                <td>
                                    @if(auth()->user()->tipo !== 'EST')
                                    <a href="{{ route('cursos.edit', [$item->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('cursos.destroy', [$item->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
