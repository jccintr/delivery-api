<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\TaxasController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\PagamentosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/tenant/{id}',[CategoriasController::class,'show']);

Route::get('/categorias',[CategoriasController::class,'index']);
Route::get('/categorias/{id}',[CategoriasController::class,'show']);
Route::post('/categorias',[CategoriasController::class,'store']);
Route::put('/categorias',[CategoriasController::class,'update']);

Route::get('/taxas',[TaxasController::class,'index']);
Route::get('/taxas/{id}',[TaxasController::class,'show']);
Route::post('/taxas',[TaxasController::class,'store']);
Route::put('/taxas',[TaxasController::class,'update']);

Route::get('/horarios',[HorariosController::class,'index']);
Route::get('/horarios/{id}',[HorariosController::class,'show']);
Route::post('/horarios',[HorariosController::class,'store']);
Route::put('/horarios',[HorariosController::class,'update']);

Route::get('/pagamentos',[PagamentosController::class,'index']);
Route::get('/pagamentos/{id}',[PagamentosController::class,'show']);
Route::post('/pagamentos',[PagamentosController::class,'store']);
Route::put('/pagamentos',[PagamentosController::class,'update']);
