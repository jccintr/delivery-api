<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\TaxasController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\PagamentosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProdutoObrigatorioController;
use App\Http\Controllers\ProdutoAdicionalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TenantsController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ObrigatoriosController;
use App\Http\Controllers\AdicionalController;
use App\Http\Controllers\StatusPedidoController;
use App\Http\Controllers\StatusPedidoLogController;
use App\Http\Controllers\PizzasController;
use App\Models\Cidade;


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
    $user = $request->user();
    $cidade = Cidade::find($user->cidade_id);
    $user->cidade = $cidade->nome;
    return $request->user();
});


Route::post('/auth/register',[AuthController::class,'register']);
Route::post('/auth/login',[AuthController::class,'login']);
Route::post('/auth/login2',[AuthController::class,'login2']);
Route::middleware('auth:sanctum')->post('/logout',[AuthController::class,'logout']);

Route::get('/tenant/{slug}',[TenantsController::class,'show']);
Route::middleware('auth:sanctum')->post('/tenant',[TenantsController::class,'store']);
Route::middleware('auth:sanctum')->post('/tenant/token',[TenantsController::class,'storePushToken']);
Route::middleware('auth:sanctum')->get('/tenant',[TenantsController::class,'index']);
Route::middleware('auth:sanctum')->post('/status',[TenantsController::class,'status']);
Route::middleware('auth:sanctum')->post('/espera',[TenantsController::class,'updateEspera']);
Route::middleware('auth:sanctum')->post('/changepassword',[TenantsController::class,'changePassword']);
Route::middleware('auth:sanctum')->post('/changepix',[TenantsController::class,'changePix']);
Route::middleware('auth:sanctum')->post('/changecolors',[TenantsController::class,'changeColors']);

Route::middleware('auth:sanctum')->get('/categorias',[CategoriasController::class,'index']);
Route::middleware('auth:sanctum')->get('/categorias/{id}',[CategoriasController::class,'show']);
Route::middleware('auth:sanctum')->post('/categorias',[CategoriasController::class,'store']);
Route::middleware('auth:sanctum')->put('/categorias/{id}',[CategoriasController::class,'update']);

Route::middleware('auth:sanctum')->get('/pagamentos',[PagamentosController::class,'index']);
Route::middleware('auth:sanctum')->get('/pagamentos/{id}',[PagamentosController::class,'show']);
Route::middleware('auth:sanctum')->post('/pagamentos',[PagamentosController::class,'store']);
Route::middleware('auth:sanctum')->put('/pagamentos/{id}',[PagamentosController::class,'update']);

Route::middleware('auth:sanctum')->get('/taxas',[TaxasController::class,'index']);
Route::middleware('auth:sanctum')->get('/taxas/{id}',[TaxasController::class,'show']);
Route::middleware('auth:sanctum')->post('/taxas',[TaxasController::class,'store']);
Route::middleware('auth:sanctum')->put('/taxas/{id}',[TaxasController::class,'update']);

Route::middleware('auth:sanctum')->get('/horarios',[HorariosController::class,'index']);
Route::middleware('auth:sanctum')->get('/horarios/{id}',[HorariosController::class,'show']);
Route::middleware('auth:sanctum')->post('/horarios',[HorariosController::class,'store']);
Route::middleware('auth:sanctum')->put('/horarios/{id}',[HorariosController::class,'update']);

Route::middleware('auth:sanctum')->get('/obrigatorios',[ObrigatoriosController::class,'index']);
Route::middleware('auth:sanctum')->post('/obrigatorios',[ObrigatoriosController::class,'store']);
Route::middleware('auth:sanctum')->get('/obrigatorios/{id}',[ObrigatoriosController::class,'show']);
Route::middleware('auth:sanctum')->put('/obrigatorios/{id}',[ObrigatoriosController::class,'update']);

Route::middleware('auth:sanctum')->get('/adicionais',[AdicionalController::class,'index']);
Route::middleware('auth:sanctum')->post('/adicionais',[AdicionalController::class,'store']);
Route::middleware('auth:sanctum')->get('/adicionais/{id}',[AdicionalController::class,'show']);
Route::middleware('auth:sanctum')->put('/adicionais/{id}',[AdicionalController::class,'update']);


//Route::get('/opcoes',[ProdutosController::class,'opcoes']);
Route::get('/produtos',[ProdutosController::class,'index']);
Route::get('/produtos/{id}',[ProdutosController::class,'show']);
Route::middleware('auth:sanctum')->post('/produtos',[ProdutosController::class,'store']);
Route::middleware('auth:sanctum')->post('/produtos/clone/{id}',[ProdutosController::class,'clone']);
Route::middleware('auth:sanctum')->put('/produtos/{id}',[ProdutosController::class,'update']);
Route::middleware('auth:sanctum')->post('/produtos/imagem/{id}',[ProdutosController::class,'updateImagem']);

Route::post('/pedidos',[PedidosController::class,'store']);
Route::middleware('auth:sanctum')->get('/pedidos',[PedidosController::class,'index']);
Route::middleware('auth:sanctum')->get('/pedidos/{id}',[PedidosController::class,'show']);
Route::middleware('auth:sanctum')->get('/pedidosresumo',[PedidosController::class,'resumo']);
Route::middleware('auth:sanctum')->get('/pedidos/{ano}/{mes}',[PedidosController::class,'historico']);
Route::get('/lastorder/{id}',[PedidosController::class,'show2']);

Route::middleware('auth:sanctum')->get('/status',[StatusPedidoController::class,'index']);

Route::middleware('auth:sanctum')->post('/statuslog',[StatusPedidoLogController::class,'store']);

Route::middleware('auth:sanctum')->post('/produtoobrigatorio',[ProdutoObrigatorioController::class,'store']);
Route::middleware('auth:sanctum')->delete('/produtoobrigatorio/{id}',[ProdutoObrigatorioController::class,'destroy']);

Route::middleware('auth:sanctum')->post('/produtoadicional',[ProdutoAdicionalController::class,'store']);
Route::middleware('auth:sanctum')->delete('/produtoadicional/{id}',[ProdutoAdicionalController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/pizzas',[PizzasController::class,'index']);
Route::middleware('auth:sanctum')->put('/pizzas/{id}',[PizzasController::class,'update']);
Route::middleware('auth:sanctum')->post('/pizzas',[PizzasController::class,'store']);