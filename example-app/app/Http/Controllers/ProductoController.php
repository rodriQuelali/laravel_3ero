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
    
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $productos = Producto::all();
        return view('producto.productos', ["productos"=> $productos]);
    }
    
    public function crear(){
        return view('producto.creando');
    }

    public function show($id) {

        $produsto = Producto::findOrFail($id);
        return view('producto.verProducto',["datos"=> $produsto]);
    }

    public function store(Request $request){

        $validatedData= $request->validate([
            'Nombre' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
        ]);
    
        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
        
       //return 'se guardo correctamente los productos'. $request->Nombre;
    }

    public function destroy(Producto $ProductoID) {
        //$producto = Producto::findOrFail($ProductoID);
        $ProductoID->delete();
        return redirect()->route('productos.index')->with('success', 'Se elimono.');
    }

    public function update() {
        
    }

}
