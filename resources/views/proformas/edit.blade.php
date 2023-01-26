@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('proformas.update', [$proforma->id]) }}">
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
                            <input id="url_qr" type="text" class="validate" name="url_qr" value="{{old('url_qr')}}" required>
                            <label for="url_qr">url_qr:</label>
                            @error('url_qr')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="oferta_id" id="oferta_id" required>
                                @foreach($ofertas as $oferta)
                                <option value="{{ $oferta->id }}">{{ $oferta->id }}</option>
                                @endforeach
                            </select>
                            <label for="oferta_id">Tipo:</label>
                            @error('oferta_id')
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