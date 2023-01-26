<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use App\Models\PromocionServicio;
use App\Models\Servicios;
use Illuminate\Http\Request;

class PromocionServicioController extends Controller
{
    function index()
    {
        \App\Models\Visitas::add();
        
        $promocion_servicio = PromocionServicio::all();
        return view('promocion_servicio.index', compact('promocion_servicio'));
    }

    function create()
    {
        $promociones = Promociones::all();
        $servicios = Servicios::all();
        return view('promocion_servicio.create', compact('promociones', 'servicios'));
    }

    function store(Request $request)
    {
        $promocion_servicio = new PromocionServicio();
        $promocion_servicio->curso_codigo = $request->input('curso_codigo');
        $promocion_servicio->promocion_id = $request->input('promocion_id');
        $promocion_servicio->save();

        return redirect()->route('promocion_servicio.index');
    }
}
