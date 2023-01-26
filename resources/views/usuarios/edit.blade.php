@extends('layouts.app')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('usuarios.update', [$usuario->id]) }}">
        @csrf
        @method('put')

        <div class="col s12 m10 offset-m1">
            <div id="panel-left" class="card">

                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Formulario de Edicion
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">

                        <div class="input-field col s12 m4">
                            <input id="name" type="text" class="validate" name="name" value="{{ $usuario->name }}" required>
                            <label for="name">Nombres:</label>
                            @error('name')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="email" type="text" class="validate" name="email" value="{{ $usuario->email }}" required>
                            <label for="email">email:</label>
                            @error('email')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="password" type="password" class="validate" name="password" value="{{ $usuario->password }}" required>
                            <label for="password">password:</label>
                            @error('password')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        {{-- <div class="input-field col s12 m4">
                            <select name="roles_id" id="roles_id" required>
                                @foreach($roles as $rol)
                                <option value="{{ $rol->id }}">{{ $rol->nombre_largo }}</option>
                                @endforeach
                            </select>
                            <label for="roles_id">Tipo:</label>
                            @error('roles_id')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div> --}}

                        <div class="input-field col s12 m4">
                            <select name="tipo" id="tipo" required>
                                <option {{ $usuario->tipo === 'DIR'?'selected':'' }} value="DIR">Director</option>
                                <option {{ $usuario->tipo === 'COO'?'selected':'' }} value="COO">Coordinador</option>
                                <option {{ $usuario->tipo === 'SEC'?'selected':'' }} value="SEC">Secretaria</option>
                                <option {{ $usuario->tipo === 'EST'?'selected':'' }} value="EST">Estudiante</option>
                            </select>
                            
                            <label for="tipo">tipo de usuario:</label>
                            @error('tipo')
                            <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="persona_id" id="persona_id" required>
                                @foreach($personas as $persona)
                                <option {{ $persona->id===$usuario->persona_id?'selected':'' }} value="{{ $persona->id }}">{{ $persona->nombre. ' '.$persona->ci }}</option>
                                @endforeach
                            </select>
                            <label for="persona_id">personas:</label>
                            @error('persona_id')
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