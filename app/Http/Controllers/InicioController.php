<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //creamos 4 fuciones que nos retornaran una vista
    public function index(){
        return view("posicion");
    }
    public function reglas(){
        return view("reglas");
    }
    public function historia(){
        return view("historia");
    }
    public function vista(){
        return view("vista");
    }
    public function vista2(){
        return view("vista2");
    }
}
