<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ProductoController extends Controller
{
    //
    // public function __invoke() {
        
    // }

    public function index() {
        return view('producto.productos');
    }
    
    public function crear(){
        return view('producto.creando');
    }

    public function verProducto($datos) {
        return view('producto.verProducto',["datos"=> $datos]);
    }

}
