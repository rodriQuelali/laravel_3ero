<?php


use App\Http\Controllers\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//forma para llamar de general
Route::apiResource('categoria', Categoria::class);

//empoints son para llamar mas espcifcios o por grupo
Route::get('categoria', [Categoria::class, 'index']);
Route::get('categoria/{id}', [Categoria::class, 'show']);
Route::post('categoria', [Categoria::class, 'store']);
Route::put('categoria/{id}', [Categoria::class, 'update']);
Route::delete('categoria/{id}', [Categoria::class, 'destroy']);

