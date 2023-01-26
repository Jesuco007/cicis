@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('roles.store') }}">
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

                        <div class="input-field col s12 m4">
                            <input id="nombre_corto" type="text" class="validate" name="nombre_corto" value="{{old('nombre_corto')}}" required>
                            <label for="nombre_corto">Modulo:</label>
                            @error('nombre_corto')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="nombre_largo" type="text" class="validate" name="nombre_largo" value="{{old('nombre_largo')}}" required>
                            <label for="nombre_largo">nombre ruta:</label>
                            @error('nombre_largo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="id_user" id="id_user" required>
                                @foreach($users as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                @endforeach
                            </select>
                            <label for="id_user">usuarios:</label>
                            @error('id_user')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-action right-align">
                        <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
@endsection