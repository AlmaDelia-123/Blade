<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posicion',function(){
    return view('posicion');
});
Route::get('/home',[InicioController::class,'index']);

Route::get('/reglas',function(){
    return view('reglas');
});
Route::get('/historia',[InicioController::class,'historia']);
Route::get('/vista',[InicioController::class,'vista']);
Route::get('/vista2',[InicioController::class,'vista2']);
