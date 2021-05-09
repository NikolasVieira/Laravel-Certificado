<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\PalestraController;
use App\Http\Controllers\PdfController;

Route::view('/', 'index')->name('index');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

//CERTIFICADO

//ROTAS ESCOLA
Route::resource('/escola', EscolaController::class);
Route::get('escola/delete/{id}', [EscolaController::class, 'destroy'])->name('escola.destroy');

//ROTAS PALESTRA
Route::resource('/palestra', PalestraController::class);
Route::get('/palestra/delete/{id}', [PalestraController::class, 'destroy'])->name('palestra.destroy');

//ROTAS PDF
Route::resource('/certificado', PdfController::class);
Route::get('/certificados', [PdfController::class, 'index'])->name('certificado.index');
Route::get('/certificado/{id}', [PdfController::class, 'show'])->name('certificado.show');
