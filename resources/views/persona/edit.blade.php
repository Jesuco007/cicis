@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('persona.update', [$persona->id]) }}">
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
                            <input id="ci" type="number" class="validate" name="ci" value="{{ $persona->ci }}" required>
                            <label for="ci">ci:</label>
                            @error('ci')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="nombre" type="text" class="validate" name="nombre" value="{{ $persona->nombre }}" required>
                            <label for="nombre">Nombres:</label>
                            @error('nombre')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="sexo" type="text" class="validate" name="sexo" value="{{ $persona->sexo }}" required>
                            <label for="sexo">sexo:</label>
                            @error('sexo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="telefono" type="number" class="validate" name="telefono" value="{{ $persona->telefono }}" required>
                            <label for="telefono">telefono:</label>
                            @error('telefono')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="fecha_nac" type="date" class="validate" name="fecha_nac" value="{{ $persona->fecha_nac }}" required>
                            <label for="fecha_nac">fecha_nac:</label>
                            @error('fecha_nac')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="nacionalidad" type="text" class="validate" name="nacionalidad" value="{{ $persona->nacionalidad }}" required>
                            <label for="nacionalidad">nacionalidad:</label>
                            @error('nacionalidad')
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