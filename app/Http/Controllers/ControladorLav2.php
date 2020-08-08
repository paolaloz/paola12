<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLav2 extends Controller
{
    public function mostrar(){
        return view('bienvenido');
    }
}
