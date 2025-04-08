<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //creamos 4 fuciones que nos retornaran una vista
    public function posicion(){
        return view("pages.posicion",["titulo"=>"Pocision"]);
    }
    public function reglas(){
        return view("pages.reglas",["titulo"=>"Reglas"]);
    }
    public function historia(){
        return view("pages.historia",["titulo"=>"Historia"]);
    }
    public function vista(){
        return view("pages.vista",["titulo"=>"Mejores"]);
    }
    public function vista2(){
        return view("pages.vista2",["titulo"=>"Home"]);
    }
}