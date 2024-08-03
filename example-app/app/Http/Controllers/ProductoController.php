<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\Producto;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

class ProductoController extends Controller
{
    //
    // public function __invoke() {
        
    // }

    public function index() {
        $productos = Producto::all();
        return view('producto.productos', ["productos"=> $productos]);
    }
    
    public function crear(){
        return view('producto.creando');
    }

    public function verProducto($datos) {
        return view('producto.verProducto',["datos"=> $datos]);
    }

    public function store(Request $request){

        /*$validatedData= $request->validate([
            'nombre' => 'required|string|max:255|unique:productos,nombre',
            'stock' => 'required|integer|min:0',
            'precio_unitario' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string|max:1000',
        ]);
    
        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
        */
        return 'se guardo correctamente los productos'. $request;
    }

}
