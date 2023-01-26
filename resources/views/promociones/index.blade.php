@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        @if(auth()->user()->tipo !== 'EST')
        <div class="col s4">
            <a href="{{ route('promociones.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        @endif

        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESCUENTOS</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>ESTADO</th>
                        <th>ITEM</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($promociones as $promocion)
                            <tr>
                                <td>{{ $promocion->id }}</td>
                                <td>{{ $promocion->descuentos }}</td>
                                <td>{{ $promocion->fecha_inicio }}</td>
                                <td>{{ $promocion->fecha_fin }}</td>
                                <td>{{ $promocion->estado }}</td>
                                <td>{{ $promocion->items->nombre.' | '.$promocion->items->tipo }}</td>
                                <td>
                                    @if(auth()->user()->tipo !== 'EST')
                                    <a href="{{ route('promociones.edit', [$promocion->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('promociones.destroy', [$promocion->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
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
