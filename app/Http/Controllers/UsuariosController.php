<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    function index()
    {
        \App\Models\Visitas::add();
        
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    function create()
    {
        $personas = Persona::all();
        return view('usuarios.create', compact('personas'));
    }

    function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        // $usuario->roles_id = $request->input('roles_id');
        $usuario->persona_id = $request->input('persona_id');
        $usuario->tipo = $request->input('tipo');
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    function edit($id)
    {
        $usuario = User::find($id);

        $personas = Persona::all();
        return view('usuarios.edit', compact('usuario', 'personas'));
    }

    function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        // $usuario->roles_id = $request->input('roles_id');
        $usuario->persona_id = $request->input('persona_id');
        $usuario->tipo = $request->input('tipo');

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
