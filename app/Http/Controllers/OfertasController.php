<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Items;
use App\Models\Ofertas;
use App\Models\User;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    function index()
    {
        session()->increment('visitas');
        
        $ofertas = Ofertas::all();
        return view('ofertas.index', compact('ofertas'));
    }

    function create()
    {
        $users = User::all();
        $cursos = Items::where('tipo', 'Cursos')->get();
        return view('ofertas.create', compact('users', 'cursos'));
    }
    
    function store(Request $request)
    {
        $oferta = new Ofertas();
        $oferta->fecha_inicio = $request->input('fecha_inicio');
        $oferta->fecha_fin = $request->input('fecha_fin');
        $oferta->estado = $request->input('estado');
        $oferta->horario = $request->input('horario');
        $oferta->user_id = $request->input('user_id');
        $oferta->cursos_codigo = $request->input('cursos_codigo');
        $oferta->save();

        return redirect()->route('ofertas.index');
    }

    function edit($id)
    {
        $ofertas = Ofertas::find($id);
        $usuarios = User::all();
        $cursos = Cursos::all();
        return view('ofertas.edit', compact('ofertas', 'usuarios', 'cursos'));
    }

    function update(Request $request, $id)
    {
        $oferta = Ofertas::find($id);
        $oferta->fecha_inicio = $request->input('fecha_inicio');
        $oferta->fecha_fin = $request->input('fecha_fin');
        $oferta->estado = $request->input('estado');
        $oferta->horario = $request->input('horario');
        $oferta->usuarios_id = $request->input('usuarios_id');
        $oferta->cursos_codigo = $request->input('cursos_codigo');
        $oferta->save();

        return redirect()->route('ofertas.index');
    }
    
    function destroy($id)
    {
        $ofertas = Ofertas::find($id);
        $ofertas->delete();
        return redirect()->route('ofertas.index');
    }
}
