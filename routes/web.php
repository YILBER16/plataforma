<?php

use Illuminate\Support\Facades\Route;
use UxWeb\SweetAlert\Facades\Alert;
use App\Http\Controllers\AcudientesController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\AnioLectivoController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\GradosController;
use App\Http\Controllers\MensualidadesController;
use App\Http\Controllers\MatriculasController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ObservadoresController;
use App\Http\Controllers\ItemobservadoresController;

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
    return view('layouts.layout');
});

Auth::routes();
//rutas acudientes
Route::resource('/acudientes',AcudientesController::class);
Route::post('/deleteDate', [AcudientesController::class, 'deleteDate']);
Route::get('/acudientesdeshabilitados', [AcudientesController::class, 'indexdeshabilitados']);
Route::post('/restore/{id_acudiente}', [AcudientesController::class, 'restore']);
//rutas padres
Route::resource('/padres',PadresController::class);
Route::post('/deleteDate', [PadresController::class, 'deleteDate']);
Route::get('/padresdeshabilitados', [PadresController::class, 'indexdeshabilitados']);
Route::post('/restorepadres/{id_padre}', [PadresController::class, 'restorepadres']);
//rutas docentes
Route::resource('/docentes',DocentesController::class);
Route::post('/deleteDate', [DocentesController::class, 'deleteDate']);
Route::get('/docentesdeshabilitados', [DocentesController::class, 'indexdeshabilitados']);
Route::post('/restoredocentes/{id_docente}', [DocentesController::class, 'restoredocentes']);
//rutas estudiantes
Route::resource('/estudiantes',EstudiantesController::class);
Route::post('/deleteDate', [EstudiantesController::class, 'deleteDate']);
Route::get('/estudiantesdeshabilitados', [EstudiantesController::class, 'indexdeshabilitados']);
Route::post('/restoreestudiantes/{id_estudiante}', [EstudiantesController::class, 'restoreestudiantes']);
Route::Get('bydepartamentos/{id}', [EstudiantesController::class, 'bydepartamentos']);
Route::Get('byciudades/{id}', [EstudiantesController::class, 'byciudades']);
//rutas años lectivos
Route::resource('/aniolectivo',AnioLectivoController::class);
//rutas eventos
Route::resource('/calendario',EventosController::class);
//rutas grados
Route::resource('/grados',GradosController::class);
//rutas mensualidades
Route::resource('/mensualidades',MensualidadesController::class);
//rutas matriculas
Route::resource('/matriculas',MatriculasController::class);
Route::get('saldofavor/{id_matricula}/edit', [MatriculasController::class, 'saldofavor']);
Route::get('/listadonuevos', [MatriculasController::class, 'listadonuevos']);
Route::get('/listadoantiguos', [MatriculasController::class, 'listadoantiguos']);
Route::get('/ultimamatricula', [MatriculasController::class, 'ultimamatricula']);
Route::put('registrarsaldo/{id_matricula}', [MatriculasController::class, 'registrarsaldo']);

//rutas pagos
Route::resource('/pagos',PagosController::class);
Route::Get('/facturaspagadas', [PagosController::class, 'facturaspagadas']);
Route::get('pdfpago/{id_pago}', [PagosController::class, 'exportpdfpago'])->name('pago.pdfpago');;
//rutas observadores
Route::resource('/observadores',ObservadoresController::class);
Route::Get('faltas/{id}', [ObservadoresController::class, 'faltas']);
Route::Get('/verobservador/{id_estudiante}', [ObservadoresController::class, 'verobservador']);
//rutas itemobservadores
Route::resource('/itemobservadores',ItemobservadoresController::class);

