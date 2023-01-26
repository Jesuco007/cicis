<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    function index()
    {
        \App\Models\Visitas::add();
        
        $promociones = Promociones::all();
        return view('promociones.index', compact('promociones'));
    }

    function create()
    {
        $items = Items::all();
        return view('promociones.create', compact('items'));
    }

    function store(Request $request)
    {
        $promocion = new Promociones();
        $promocion->descuentos = $request->input('descuentos');
        $promocion->fecha_inicio = $request->input('fecha_inicio');
        $promocion->fecha_fin = $request->input('fecha_fin');
        $promocion->estado = $request->input('estado');
        $promocion->items_id = $request->input('items_id');
        $promocion->save();

        return redirect()->route('promociones.index');
    }

    function edit($id)
    {
        $promocion = Promociones::find($id);
        $items = Items::all();
        return view('promociones.edit', compact('promocion', 'items'));
    }

    function update(Request $request,$id)
    {
        $promocion = Promociones::find($id);
        $promocion->descuentos = $request->input('descuentos');
        $promocion->fecha_inicio = $request->input('fecha_inicio');
        $promocion->fecha_fin = $request->input('fecha_fin');
        $promocion->estado = $request->input('estado');
        $promocion->items_id = $request->input('items_id');
        $promocion->save();

        return redirect()->route('promociones.index');
    }

    function destroy($id)
    {
        $promocion = Promociones::find($id);
        $promocion->delete();
        return redirect()->route('promociones.index');
    }
}
