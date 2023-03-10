@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('ofertas.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>ESTADO</th>
                        <th>HORARIO</th>
                        <th>USUARIOS</th>
                        <th>CURSOS</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ofertas as $oferta)
                            <tr>
                                <td>{{ $oferta->id }}</td>
                                <td>{{ $oferta->fecha_inicio }}</td>
                                <td>{{ $oferta->fecha_fin }}</td>
                                <td>{{ $oferta->estado }}</td>
                                <td>{{ $oferta->horario }}</td>
                                <td>{{ $oferta->usuarios->persona->nombre }}</td>
                                <td>{{ $oferta->cursos->items->nombre }}</td>
                                <td>
                                    <a href="{{ route('ofertas.edit', [$oferta->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('ofertas.destroy', [$oferta->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
