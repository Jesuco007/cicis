<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Items;
use App\Models\Ofertas;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    function index()
    {
        session()->increment('visitas');
        
        $items = Items::where('tipo', '=', 'Cursos')->get();
        $items->load(['cursos']);
        return view('cursos.index', compact('items'));
    }

    function create()
    {
        return view('cursos.create');
    }
    
    function store(Request $request)
    {
        $item = new Items();
        $item->tipo = 'Cursos';
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->estado = $request->input('estado');
        $item->save();
        
        $curso = new Cursos();
        $curso->duracion = $request->input('duracion');
        $curso->requisito = $request->input('requisito');
        $curso->nivel = $request->input('nivel');
        $curso->items_id = $item->id;
        $curso->save();

        return redirect()->route('cursos.index');
    }

    function edit($codigo)
    {
        $item = Items::find($codigo);
        return view('cursos.edit', compact('item'));
    }

    function update(Request $request, $codigo)
    {
        $item = Items::find($codigo);
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->estado = $request->input('estado');
        $item->save();
        
        $curso = $item->cursos;
        $curso->duracion = $request->input('duracion');
        $curso->requisito = $request->input('requisito');
        $curso->nivel = $request->input('nivel');
        $curso->save();

        return redirect()->route('cursos.index');
    }

    function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();

        return redirect()->route('cursos.index');
    }
}
