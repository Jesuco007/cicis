@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('servicios.store') }}">
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
                            <input id="nombre" type="text" class="validate" name="nombre" value="{{old('nombre')}}" required>
                            <label for="nombre">Nombres:</label>
                            @error('nombre')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="descripcion" type="text" class="validate" name="descripcion" value="{{old('descripcion')}}" required>
                            <label for="descripcion">descripcion:</label>
                            @error('descripcion')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="costo" type="text" class="validate" name="costo" value="{{old('costo')}}" required>
                            <label for="costo">costo:</label>
                            @error('costo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>
                        
                        <div class="input-field col s12 m4">
                            <input id="estado" type="text" class="validate" name="estado" value="{{old('estado')}}" required>
                            <label for="estado">estado:</label>
                            @error('estado')
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