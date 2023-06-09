<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EstatusAlumno;
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
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detalleAlumno', [App\Http\Controllers\EstatusAlumno::class, 'detalleAlumno'])->name('detalleAlumno');
Route::post('/detalleAlumno', [App\Http\Controllers\EstatusAlumno::class, 'detalleAlumno'])->name('detalleAlumno');
// Route::resource('estatus', EstatusAlumno::class);
// Route::get('/detalleAlumno/create', [App\Http\Controllers\EstatusAlumno::class, 'create'])->name('Create');
Route::post('/BajaUsuario', [App\Http\Controllers\EstatusAlumno::class, 'BajaUsuario'])->name('BajaUsuario');
// Route::post('/detalleAlumno/edit', [App\Http\Controllers\EstatusAlumno::class, 'edit'])->name('Edit');
// Route::post('/detalleAlumno/update', [App\Http\Controllers\EstatusAlumno::class, 'update'])->name('update');
Route::get('/send-email', [MailController::class, 'sendEmail']);
