<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EscolaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('escola', EscolaController::class);
Route::get('escola/delete/{id}', [EscolaController::class, 'destroy'])->name('escola.delete');
