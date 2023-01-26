<?php

namespace App\Http\Controllers;

use App\Models\Ofertas;
use App\Models\Proformas;
use Illuminate\Http\Request;

class ProformasController extends Controller
{
    function index()
    {
        session()->increment('visitas');
        
        $proformas = Proformas::all();
        return view('proformas.index', compact('proformas'));
    }

    function create()
    {
        $ofertas = Ofertas::all();
        return view('proformas.create', compact('ofertas'));
    }

    function store(Request $request)
    {
        $proforma = new Proformas();
        $proforma->url_qr = $request->input('url_qr');
        $proforma->oferta_id = $request->input('oferta_id');
        $proforma->save();

        return redirect()->route('proformas.index');
    }

    function edit($id)
    {
        $proforma = Proformas::find($id);
        return view('proformas.edit', compact('proformas'));
    }

    function update(Request $request, $id)
    {
        $proforma = Proformas::find($id);
        $proforma->url_qr = $request->input('url_qr');
        $proforma->oferta_id = $request->input('oferta_id');
        $proforma->save();

        return redirect()->route('proformas.index');
    }

    function destroy($id)
    {
        $proforma = Proformas::find($id);
        $proforma->delete();
        return redirect()->route('proformas.index');
    }
}
