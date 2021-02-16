<?php

use Illuminate\Support\Facades\Route;
use UxWeb\SweetAlert\Facades\Alert;
use App\Http\Controllers\AcudientesController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\DocentesController;

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
