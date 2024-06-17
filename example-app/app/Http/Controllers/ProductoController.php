<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index() {
        return "hola inicio";
    }
    
    public function crear(){
        return "Creando Producto";
    }

}
