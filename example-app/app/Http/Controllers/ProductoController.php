<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ProductoController extends Controller
{
    //
    public function index() {
        return View('productos');
    }
    
    public function crear(){
        return "Creando Producto";
    }

}
