<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function index()
    {
        session()->increment('visitas');
        
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    function create()
    {
        return view('persona.create');
    }
    
    function store(Request $request)
    {
        $persona = new Persona();
        $persona->ci = $request->input('ci');
        $persona->nombre = $request->input('nombre');
        $persona->sexo = $request->input('sexo');
        $persona->telefono = $request->input('telefono');
        $persona->fecha_nac = $request->input('fecha_nac');
        $persona->nacionalidad = $request->input('nacionalidad');
        $persona->save();

        return redirect()->route('persona.index');
    }

    function edit($id)
    {
        $persona = Persona::find($id);
        return view('persona.edit', compact('persona'));
    }
    
    function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->ci = $request->input('ci');
        $persona->nombre = $request->input('nombre');
        $persona->sexo = $request->input('sexo');
        $persona->telefono = $request->input('telefono');
        $persona->fecha_nac = $request->input('fecha_nac');
        $persona->nacionalidad = $request->input('nacionalidad');
        $persona->save();

        return redirect()->route('persona.index');
    }

    function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
