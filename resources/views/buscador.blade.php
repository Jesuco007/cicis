@extends('layouts.app')
@section('content')
<h3>Buscador general</h3>

<div class="row">
    <form action="{{ route('buscador') }}">
        <div class="input-field col s10">
            <input id="buscar" type="text" class="validate" name="busqueda" value="{{old('busqueda')}}" required>
            <label for="buscar">Texto de búsqueda general:</label>
        </div>
        <div class="input-field col s2">
            <button class="btn">Buscar</button>
        </div>
    </form>
</div>




<div class="row">
    <div class="divider"></div>
</div>


<h6>Resultados de búsqueda para el término: {{ $busqueda }}</h6>


<div class="row" style="margin-top: 5%">
    <h5>Resultados en Personas</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CI</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>SEXO</th>
                    <th>TELEFONO</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>NACIONALIDAD</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->ci }}</td>
                    <td style="text-decoration: underline;">{{ $persona->nombre }}</td>
                    <td>{{ $persona->sexo }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->fecha_nac }}</td>
                    <td>{{ $persona->nacionalidad }}</td>
                    <td>{{ $persona->tipo }}</td>
                    <td>
                        @if( ! auth()->user()->tipo === 'EST')
                        <a href="{{ route('persona.edit', [$persona->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                        <a href="{{ route('persona.destroy', [$persona->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





<div class="row">
    <div class="divider"></div>
</div>





<div class="row" style="margin-top: 5%">
    <h5>Resultados en Cursos</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>DURACION</th>
                    <th>REQUISITO</th>
                    <th>NIVEL</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $item)
                <tr>
                    <td>{{ $item->cursos->codigo }}</td>
                    <td style="text-decoration: underline;">{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->cursos->duracion }}</td>
                    <td>{{ $item->cursos->requisito }}</td>
                    <td>{{ $item->cursos->nivel }}</td>
                    <td>{{ $item->estado }}</td>
                    <td>
                        @if( ! auth()->user()->tipo === 'EST')
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





<div class="row">
    <div class="divider"></div>
</div>








<div class="row" style="margin-top: 5%">
    <h5>Resultados en Servicios</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>COSTO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $item)
                <tr>
                    <td>{{ $item->servicios->codigo }}</td>
                    <td style="text-decoration: underline;">{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->servicios->costo }}</td>
                    <td>{{ $item->estado }}</td>
                    <td>
                        @if( ! auth()->user()->tipo === 'EST')
                        <a href="{{ route('servicios.edit', [$item->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                        <a href="{{ route('servicios.destroy', [$item->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
