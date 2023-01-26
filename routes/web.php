<?php

use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ProformasController;
use App\Http\Controllers\PromocionCursoController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UsuariosController;
use App\Models\Items;
use App\Models\Proformas;
use App\Models\Promociones;
use App\Models\Roles;
use App\Models\Servicios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/test', function () {
    $items = auth()->user()->roles;

    return $items;
});


Route::middleware(['auth'])->group(function () {
    Route::get('/persona/index', [PersonaController::class, 'index'])->name('persona.index');
    Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');
    Route::post('/persona/store', [PersonaController::class, 'store'])->name('persona.store');
    Route::get('/persona/edit/{id}', [PersonaController::class, 'edit'])->name('persona.edit');
    Route::put('/persona/update/{id}', [PersonaController::class, 'update'])->name('persona.update');
    Route::get('/persona/destroy/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');

    Route::get('/cursos/index', [CursosController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/create', [CursosController::class, 'create'])->name('cursos.create');
    Route::post('/cursos/store', [CursosController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/edit/{id}', [CursosController::class, 'edit'])->name('cursos.edit');
    Route::put('/cursos/update/{id}', [CursosController::class, 'update'])->name('cursos.update');
    Route::get('/cursos/destroy/{id}', [CursosController::class, 'destroy'])->name('cursos.destroy');

    Route::get('/ofertas/index', [OfertasController::class, 'index'])->name('ofertas.index');
    Route::get('/ofertas/create', [OfertasController::class, 'create'])->name('ofertas.create');
    Route::post('/ofertas/store', [OfertasController::class, 'store'])->name('ofertas.store');
    Route::get('/ofertas/edit/{id}', [OfertasController::class, 'edit'])->name('ofertas.edit');
    Route::put('/ofertas/update/{id}', [OfertasController::class, 'update'])->name('ofertas.update');
    Route::get('/ofertas/destroy/{id}', [OfertasController::class, 'destroy'])->name('ofertas.destroy');

    Route::get('/proformas/index', [ProformasController::class, 'index'])->name('proformas.index');
    Route::get('/proformas/create', [ProformasController::class, 'create'])->name('proformas.create');
    Route::post('/proformas/store', [ProformasController::class, 'store'])->name('proformas.store');
    Route::get('/proformas/edit/{id}', [ProformasController::class, 'edit'])->name('proformas.edit');
    Route::put('/proformas/update/{id}', [ProformasController::class, 'update'])->name('proformas.update');
    Route::get('/proformas/destroy/{id}', [ProformasController::class, 'destroy'])->name('proformas.destroy');

    Route::get('/promociones/index', [PromocionesController::class, 'index'])->name('promociones.index');
    Route::get('/promociones/create', [PromocionesController::class, 'create'])->name('promociones.create');
    Route::post('/promociones/store', [PromocionesController::class, 'store'])->name('promociones.store');
    Route::get('/promociones/edit/{id}', [PromocionesController::class, 'edit'])->name('promociones.edit');
    Route::put('/promociones/update/{id}', [PromocionesController::class, 'update'])->name('promociones.update');
    Route::get('/promociones/destroy/{id}', [PromocionesController::class, 'destroy'])->name('promociones.destroy');

    Route::get('/roles/index', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles/store', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/update/{id}', [RolesController::class, 'update'])->name('roles.update');
    Route::get('/roles/destroy/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');

    Route::get('/servicios/index', [ServiciosController::class, 'index'])->name('servicios.index');
    Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
    Route::post('/servicios/store', [ServiciosController::class, 'store'])->name('servicios.store');
    Route::get('/servicios/edit/{id}', [ServiciosController::class, 'edit'])->name('servicios.edit');
    Route::put('/servicios/update/{id}', [ServiciosController::class, 'update'])->name('servicios.update');
    Route::get('/servicios/destroy/{id}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');

    Route::get('/usuarios/index', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/update/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::get('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    Route::get('/promocion_curso/index', [PromocionCursoController::class, 'index'])->name('promocion_curso.index');
    Route::get('/promocion_curso/create', [PromocionCursoController::class, 'create'])->name('promocion_curso.create');
    Route::post('/promocion_curso/store', [PromocionCursoController::class, 'store'])->name('promocion_curso.store');
    Route::get('/promocion_curso/edit/{id}', [PromocionCursoController::class, 'edit'])->name('promocion_curso.edit');
    Route::put('/promocion_curso/update/{id}', [PromocionCursoController::class, 'update'])->name('promocion_curso.update');
    Route::get('/promocion_curso/destroy/{id}', [PromocionCursoController::class, 'destroy'])->name('promocion_curso.destroy');


    //Buscador general de la aplicacion
    Route::get('/busqueda-general', [BuscadorController::class, 'buscar'])->name('buscador');




    //Reportes  ***********************************
    Route::get('reportes', [ReporteController::class, 'reportes'])->name('reportes.index');
    
    Route::get('promocionesPorMes', [ReporteController::class, 'promocionesPorMes'])->name('promocionesPorMes');
    Route::get('maximoPromocionMes', [ReporteController::class, 'maximoPromocionMes'])->name('maximoPromocionMes');
    Route::get('ofertasPorMes', [ReporteController::class, 'ofertasPorMes'])->name('ofertasPorMes');
    Route::get('maximoOfertasMes', [ReporteController::class, 'maximoOfertasMes'])->name('maximoOfertasMes');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
