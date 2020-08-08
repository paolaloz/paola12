<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLav extends Controller
{
    public function mostrar(){
        return view('Hola');
    }
}
