<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    function index()
    {
        \App\Models\Visitas::add();
        
        $items = Items::where('tipo', '=', 'Servicios')->get();
        $items->load(['servicios']);
        return view('servicios.index', compact('items'));
    }

    function create()
    {
        return view('servicios.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'estado'=>'required',
            'costo'=>'required',
            // 'costo'=>'required|numeric|date',
        ]);
        
        $item = new Items();
        $item->tipo = 'Servicios';
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->estado = $request->input('estado');
        $item->save();

        $servicio = new Servicios();
        $servicio->costo = $request->input('costo');
        $servicio->items_id = $item->id;
        $servicio->save();

        return redirect()->route('servicios.index');
    }

    function edit($id)
    {
        $item = Items::find($id);
        return view('servicios.edit', compact('item'));
    }

    function update(Request $request, $codigo)
    {
        $item = Items::find($codigo);
        $item->nombre = $request->input('nombre');
        $item->descripcion = $request->input('descripcion');
        $item->estado = $request->input('estado');
        $item->save();

        $servicio = $item->servicios;
        $servicio->costo = $request->input('costo');
        $servicio->items_id = $item->id;
        $servicio->save();

        return redirect()->route('servicios.index');
    }

    function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();
        return redirect()->route('servicios.index');
    }
}
