<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[InicioController::class,'index']);

Route::get('/vista2',[InicioController::class,'vista2'])->name('home');
Route::get('/posicion',[InicioController::class,'posicion'])->name('pos');
Route::get('/reglas',[InicioController::class,'reglas'])->name('reg');
Route::get('/historia',[InicioController::class,'historia'])->name('his');
Route::get('/vista',[InicioController::class,'vista'])->name('mejores');
