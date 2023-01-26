<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    function index()
    {
        \App\Models\Visitas::add();
        
        $roles = Roles::orderBy('id_user', 'asc')->get();
        $roles->load(['user']);
        return view('roles.index', compact('roles'));
    }

    function create()
    {
        $users = User::all();
        return view('roles.create', compact('users'));
    }

    function store(Request $request)
    {
        $rol = new Roles();
        $rol->nombre_corto = $request->input('nombre_corto');
        $rol->nombre_largo = $request->input('nombre_largo');
        $rol->descripcion = '- - -';
        $rol->id_user = $request->input('id_user');
        $rol->save();

        return redirect()->route('roles.index');
    }

    function edit($id)
    {
        $rol = Roles::find($id);
        return view('roles.edit', compact('rol'));
    }

    function update(Request $request, $id)
    {
        $rol = Roles::find($id);
        $rol->nombre_corto = $request->input('nombre_corto');
        $rol->nombre_largo = $request->input('nombre_largo');
        $rol->save();

        return redirect()->route('roles.index');
    }

    function destroy($id)
    {
        $rol = Roles::find($id);
        $rol->delete();
        return redirect()->route('roles.index');
    }
}
