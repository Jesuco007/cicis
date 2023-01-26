@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('ofertas.update', [$ofertas->id]) }}">
        @csrf
        @method('put')

        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left" class="card">

                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Formulario de Registro
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">

                        <div class="input-field col s12 m4">
                            <input id="fecha_inicio" type="date" class="validate" name="fecha_inicio" value="{{ $ofertas->fecha_inicio }}" required>
                            <label for="fecha_inicio">fecha_inicio:</label>
                            @error('fecha_inicio')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="fecha_fin" type="date" class="validate" name="fecha_fin" value="{{ $ofertas->fecha_fin }}" required>
                            <label for="fecha_fin">fecha_fin:</label>
                            @error('fecha_fin')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="estado" type="text" class="validate" name="estado" value="{{ $ofertas->estado }}" required>
                            <label for="estado">estado:</label>
                            @error('estado')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="horario" type="text" class="validate" name="horario" value="{{ $ofertas->horario }}" required>
                            <label for="horario">horario:</label>
                            @error('horario')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="usuarios_id" id="usuarios_id" required>
                                @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                            <label for="usuarios_id">Tipo:</label>
                            @error('usuarios_id')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="cursos_codigo" id="cursos_codigo" required>
                                @foreach($cursos as $curso)
                                <option value="{{ $item->curso->codigo }}">{{ $item->curso->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="cursos_codigo">Tipo:</label>
                            @error('cursos_codigo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>

                    <div class="card-action right-align">
                        <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar cambios</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
@endsection