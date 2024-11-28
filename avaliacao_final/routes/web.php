<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CapitaisController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AssociacaoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_estado', [EstadoController::class, "formCriarEstados"]);

Route::get('/listar_estado', [EstadoController::class, 'listar']);

Route::post('/criar_estado', [EstadoController::class, 'criar']);

Route::delete("/deletar_estado/{id}", [EstadoController::class, 'deletar']);

Route::get("/editar_estado/{id}", [EstadoController::class, 'formEditarEstado']);

Route::put("/editar_estado/{id}", [EstadoController::class, 'editar']);


Route::get('/cadastro_capital', [CapitalController::class, "formCriarCapital"]);

Route::post('/criar_capital', [CapitalController::class, 'criar']);

Route::get('/listar_capital', [CapitalController::class, 'listar']);

Route::delete("/deletar_capital/{id}", [CapitalController::class, 'deletar']);


Route::get('/', [AppController::class, 'inicial']);


Route::get('/cadastro_associacao', [AssociacaoController::class, 'formCadastrarAssociacao']);

Route::post('/cadastrar_associacao', [AssociacaoController::class, 'cadastrar']);

Route::get('/listar_associacao', [AssociacaoController::class, 'listar']);