<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', InicioController::class);

Route::get('productos', fn()=> 'hola Producto');
Route::get('clientes', function () {
   return 'HOLA Clientes' ;
});

//rutas mas datos.
Route::get('productos/creando', function(){
    return 'Creando Productos';
});

//paso de variables
Route::get('productos/{datos}', function($datos){
    return "producto $datos";
});

//paso de parametros con dos variables.
Route::get('productos/{datos}/{cliente}', function($datos, $cliente){
    return "producto $datos, $cliente";
});
