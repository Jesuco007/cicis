@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('proformas.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>URL QR</th>
                        <th>OFERTA ID</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($proformas as $proforma)
                            <tr>
                                <td>{{ $proforma->id }}</td>
                                <td>{{ $proforma->url_qr }}</td>
                                <td>{{ $proforma->ofertas->id }}</td>
                                <td>
                                    {{-- <a href="{{ route('proformas.edit', [$proforma->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                    <a href="{{ route('proformas.destroy', [$proforma->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
