@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('promociones.store') }}">
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
                            <input id="descuentos" type="number" class="validate" name="descuentos" value="{{old('descuentos')}}" required>
                            <label for="descuentos">Descuentos:</label>
                            @error('descuentos')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="fecha_inicio" type="date" class="validate" name="fecha_inicio" value="{{old('fecha_inicio')}}" required>
                            <label for="fecha_inicio">fecha_inicio:</label>
                            @error('fecha_inicio')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="fecha_fin" type="date" class="validate" name="fecha_fin" value="{{old('fecha_fin')}}" required>
                            <label for="fecha_fin">fecha_fin:</label>
                            @error('fecha_fin')
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

                        <div class="input-field col s12 m8">
                            <select name="items_id" id="items_id" required>
                                @foreach($items as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre.' | '.$item->tipo }}</option>
                                @endforeach
                            </select>
                            <label for="items_id">Tipo:</label>
                            @error('items_id')
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