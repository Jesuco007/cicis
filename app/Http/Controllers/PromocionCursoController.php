<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\PromocionCurso;
use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionCursoController extends Controller
{
    function index()
    {
        session()->increment('visitas');
        
        $promocion_cursos = PromocionCurso::all();
        return view('promocion_curso.index', compact('promocion_cursos'));
    }

    function create()
    {
        $cursos = Cursos::all();
        $promociones = Promociones::all();
        return view('promocion_curso.create', compact('cursos', 'promociones'));
    }

    function store(Request $request)
    {
        $promocion_curso = new PromocionCurso();
        $promocion_curso->curso_codigo = $request->input('curso_codigo');
        $promocion_curso->promocion_id = $request->input('promocion_id');
        $promocion_curso->save();

        return redirect()->route('promocion_curso.index');
    }
}
