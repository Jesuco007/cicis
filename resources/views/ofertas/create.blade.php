@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('ofertas.store') }}">
        @csrf

        <div class="col s12 m8 offset-m2">
            <div id="panel-left" class="card">

                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Formulario de Registro
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">

                        <div class="input-field col s12 m6">
                            <input id="fecha_inicio" type="date" class="validate" name="fecha_inicio" value="{{old('fecha_inicio')}}" required>
                            <label for="fecha_inicio">fecha_inicio:</label>
                            @error('fecha_inicio')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="fecha_fin" type="date" class="validate" name="fecha_fin" value="{{old('fecha_fin')}}" required>
                            <label for="fecha_fin">fecha_fin:</label>
                            @error('fecha_fin')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="estado" type="text" class="validate" name="estado" value="{{old('estado')}}" required>
                            <label for="estado">estado:</label>
                            @error('estado')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="horario" type="text" class="validate" name="horario" value="{{old('horario')}}" required>
                            <label for="horario">horario:</label>
                            @error('horario')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <select name="user_id" id="user_id" required>
                                @foreach($users as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->persona->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="user_id">persona:</label>
                            @error('user_id')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <select name="cursos_codigo" id="cursos_codigo" required>
                                @foreach($cursos as $item)
                                <option value="{{ $item->cursos->codigo }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="cursos_codigo">cursos:</label>
                            @error('cursos_codigo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-action right-align">
                    <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
