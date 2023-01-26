<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Persona;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function buscar(Request $request){
        $busqueda = $request->input('busqueda');

        $personas = Persona::where('nombre', 'like', "%$busqueda%")->get();
        $cursos = Items::where('tipo', 'Cursos')->where('nombre', 'like', "%$busqueda%")->get();
        $servicios = Items::where('tipo', 'Servicios')->where('nombre', 'like', "%$busqueda%")->get();

        return view('buscador', compact('personas', 'cursos', 'servicios', 'busqueda'));
    }
}
