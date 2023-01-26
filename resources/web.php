<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpleadoTrabajoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoModuloController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\HerramientaTrabajoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropietariaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\UserGrupoController;
use App\Models\GrupoModulo;
use App\Models\Servicio;
use App\Models\Solicitud;
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
    session()->increment('count');
    return view('home');
})->name('home');



Route::get('/test', function () {
    $test = auth()->user()->cliente;
    return $test;
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




Route::middleware('auth')->group(function () {
    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/cliente/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    Route::get('/empleado', [EmpleadoController::class, 'index'])->name('empleado.index');
    Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
    Route::post('/empleado', [EmpleadoController::class, 'store'])->name('empleado.store');
    Route::get('/empleado/{id}/edit', [EmpleadoController::class, 'edit'])->name('empleado.edit');
    Route::put('/empleado/{id}', [EmpleadoController::class, 'update'])->name('empleado.update');
    Route::get('/empleado/{id}/destroy', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');

    Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
    Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.create');
    Route::post('/empresa', [EmpresaController::class, 'store'])->name('empresa.store');
    Route::get('/empresa/{id}/edit', [EmpresaController::class, 'edit'])->name('empresa.edit');
    Route::put('/empresa/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
    Route::get('/empresa/{id}/destroy', [EmpresaController::class, 'destroy'])->name('empresa.destroy');

    Route::get('/contrato', [ContratoController::class, 'index'])->name('contrato.index');
    Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contrato.create');
    Route::post('/contrato', [ContratoController::class, 'store'])->name('contrato.store');
    Route::get('/contrato/{id}/edit', [ContratoController::class, 'edit'])->name('contrato.edit');
    Route::put('/contrato/{id}', [ContratoController::class, 'update'])->name('contrato.update');
    Route::get('/contrato/{id}/destroy', [ContratoController::class, 'destroy'])->name('contrato.destroy');

    Route::get('/servicio', [ServicioController::class, 'index'])->name('servicio.index');
    Route::get('/servicio/create', [ServicioController::class, 'create'])->name('servicio.create');
    Route::post('/servicio', [ServicioController::class, 'store'])->name('servicio.store');
    Route::get('/servicio/{id}/edit', [ServicioController::class, 'edit'])->name('servicio.edit');
    Route::put('/servicio/{id}', [ServicioController::class, 'update'])->name('servicio.update');
    Route::get('/servicio/{id}/destroy', [ServicioController::class, 'destroy'])->name('servicio.destroy');

    Route::get('/solicitud', [SolicitudController::class, 'index'])->name('solicitud.index');
    Route::get('/solicitud/create', [SolicitudController::class, 'create'])->name('solicitud.create');
    Route::post('/solicitud', [SolicitudController::class, 'store'])->name('solicitud.store');
    Route::get('/solicitud/{id}', [SolicitudController::class, 'show'])->name('solicitud.show');
    Route::get('/solicitud/{id}/edit', [SolicitudController::class, 'edit'])->name('solicitud.edit');
    Route::put('/solicitud/{id}', [SolicitudController::class, 'update'])->name('solicitud.update');
    Route::get('/solicitud/{id}/destroy', [SolicitudController::class, 'destroy'])->name('solicitud.destroy');

    Route::get('/trabajo', [TrabajoController::class, 'index'])->name('trabajo.index');
    Route::get('/trabajo/create', [TrabajoController::class, 'create'])->name('trabajo.create');
    Route::post('/trabajo', [TrabajoController::class, 'store'])->name('trabajo.store');
    Route::get('/trabajo/{id}', [TrabajoController::class, 'show'])->name('trabajo.show');
    Route::get('/trabajo/{id}/edit', [TrabajoController::class, 'edit'])->name('trabajo.edit');
    Route::put('/trabajo/{id}', [TrabajoController::class, 'update'])->name('trabajo.update');
    Route::get('/trabajo/{id}/destroy', [TrabajoController::class, 'destroy'])->name('trabajo.destroy');
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - -
    Route::get('/trabajo/empleado/create/{id}', [EmpleadoTrabajoController::class, 'create'])->name('trabajo.empleado.create');
    Route::post('/trabajo/empleado', [EmpleadoTrabajoController::class, 'store'])->name('trabajo.empleado.store');
    Route::get('/trabajo/empleado/{id}/destroy', [EmpleadoTrabajoController::class, 'destroy'])->name('trabajo.empleado.destroy');
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - -
    Route::get('/trabajo/herramienta/create/{id}', [HerramientaTrabajoController::class, 'create'])->name('trabajo.herramienta.create');
    Route::post('/trabajo/herramienta', [HerramientaTrabajoController::class, 'store'])->name('trabajo.herramienta.store');
    Route::get('/trabajo/herramienta/{id}/destroy', [HerramientaTrabajoController::class, 'destroy'])->name('trabajo.herramienta.destroy');



    Route::get('/herramienta', [HerramientaController::class, 'index'])->name('herramienta.index');
    Route::get('/herramienta/create', [HerramientaController::class, 'create'])->name('herramienta.create');
    Route::post('/herramienta', [HerramientaController::class, 'store'])->name('herramienta.store');
    Route::get('/herramienta/{id}/edit', [HerramientaController::class, 'edit'])->name('herramienta.edit');
    Route::put('/herramienta/{id}', [HerramientaController::class, 'update'])->name('herramienta.update');
    Route::get('/herramienta/{id}/destroy', [HerramientaController::class, 'destroy'])->name('herramienta.destroy');

    Route::get('/mensaje', [MensajeController::class, 'index'])->name('mensaje.index');
    Route::get('/mensaje/create', [MensajeController::class, 'create'])->name('mensaje.create');
    Route::post('/mensaje', [MensajeController::class, 'store'])->name('mensaje.store');
    Route::get('/mensaje/{id}/edit', [MensajeController::class, 'edit'])->name('mensaje.edit');
    Route::put('/mensaje/{id}', [MensajeController::class, 'update'])->name('mensaje.update');
    Route::get('/mensaje/{id}/destroy', [MensajeController::class, 'destroy'])->name('mensaje.destroy');

    Route::get('/horario', [HorarioController::class, 'index'])->name('horario.index');
    Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
    Route::post('/horario', [HorarioController::class, 'store'])->name('horario.store');
    Route::get('/horario/{id}/edit', [HorarioController::class, 'edit'])->name('horario.edit');
    Route::put('/horario/{id}', [HorarioController::class, 'update'])->name('horario.update');
    Route::get('/horario/{id}/destroy', [HorarioController::class, 'destroy'])->name('horario.destroy');

    Route::get('/propietaria', [PropietariaController::class, 'index'])->name('propietaria.index');
    Route::get('/propietaria/create', [PropietariaController::class, 'create'])->name('propietaria.create');
    Route::post('/propietaria', [PropietariaController::class, 'store'])->name('propietaria.store');
    Route::get('/propietaria/{id}/edit', [PropietariaController::class, 'edit'])->name('propietaria.edit');
    Route::put('/propietaria/{id}', [PropietariaController::class, 'update'])->name('propietaria.update');
    Route::get('/propietaria/{id}/destroy', [PropietariaController::class, 'destroy'])->name('propietaria.destroy');




    //MENU DINAMICO
    Route::get('/grupo', [GrupoController::class, 'index'])->name('grupo.index');
    Route::get('/grupo/create', [GrupoController::class, 'create'])->name('grupo.create');
    Route::post('/grupo', [GrupoController::class, 'store'])->name('grupo.store');
    Route::get('/grupo/{id}', [GrupoController::class, 'show'])->name('grupo.show');
    Route::get('/grupo/{id}/edit', [GrupoController::class, 'edit'])->name('grupo.edit');
    Route::put('/grupo/{id}', [GrupoController::class, 'update'])->name('grupo.update');
    Route::get('/grupo/{id}/destroy', [GrupoController::class, 'destroy'])->name('grupo.destroy');
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - -
    Route::get('/grupo/user/create/{id}', [UserGrupoController::class, 'create'])->name('grupo.user.create');
    Route::post('/grupo/user', [UserGrupoController::class, 'store'])->name('grupo.user.store');
    Route::get('/grupo/user/{id}/destroy', [UserGrupoController::class, 'destroy'])->name('grupo.user.destroy');
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - -
    Route::get('/grupo/modulo/create/{id}', [GrupoModuloController::class, 'create'])->name('grupo.modulo.create');
    Route::post('/grupo/modulo', [GrupoModuloController::class, 'store'])->name('grupo.modulo.store');
    Route::get('/grupo/modulo/{id}/destroy', [GrupoModuloController::class, 'destroy'])->name('grupo.modulo.destroy');
});