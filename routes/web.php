<?php

use Illuminate\Support\Facades\Route;
use UxWeb\SweetAlert\Facades\Alert;
use App\Http\Controllers\AcudientesController;

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
Route::resource('/acudientes',AcudientesController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/updateDate', [AcudientesController::class, 'updateDate']);
Route::post('/deleteDate', [AcudientesController::class, 'deleteDate']);
