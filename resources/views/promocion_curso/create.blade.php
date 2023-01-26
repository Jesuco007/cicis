@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('promocion_curso.store') }}">
        @csrf

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
                            <select name="cursos_codigo" id="cursos_codigo" required>
                                @foreach($cursos as $curso)
                                <option value="{{ $curso->codigo }}">{{ $curso->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="cursos_codigo">Tipo:</label>
                            @error('cursos_codigo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="promocion_id" id="promocion_id" required>
                                @foreach($promociones as $promocion)
                                <option value="{{ $promocion->id }}">{{ $promocion->descuentos }}</option>
                                @endforeach
                            </select>
                            <label for="promocion_id">Tipo:</label>
                            @error('promocion_id')
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