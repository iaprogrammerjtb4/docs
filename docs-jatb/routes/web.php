<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PROPROCESOController;
use App\Http\Controllers\DOCDOCUMENTOController;
use App\Http\Controllers\TIPTIPODOCController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pro_proceso', PROPROCESOController::class);

Route::resource('doc_documento', DOCDOCUMENTOController::class);

Route::resource('tip_tipo_doc', TIPTIPODOCController::class);