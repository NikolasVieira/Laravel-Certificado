<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\PalestraController;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/escola', EscolaController::class);
Route::get('escola/delete/{id}', [EscolaController::class, 'destroy'])->name('escola.delete');

Route::resource('/palestra', PalestraController::class);

Route::resource('/pdf', EscolaController::class);
Route::get('/gerarpdf', [PdfController::class, 'geraPdf'])->name('pdf.gen');
