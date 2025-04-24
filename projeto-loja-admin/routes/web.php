<?php

use App\Http\Controllers\Cadastro\BancoController;
use App\Http\Controllers\Cadastro\CategoriaController;
use App\Http\Controllers\Cadastro\StatusController;
use App\Http\Controllers\Cadastro\TipoContaCorrenteController;
use App\Http\Controllers\Cadastro\UnidadeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"] )->name("home");

Route::resource("/status", StatusController::class);

Route::resource("/categoria", CategoriaController::class);

Route::resource("/unidade", UnidadeController::class);

Route::resource("/banco", BancoController::class);

Route::resource("/tipocontacorrente", TipoContaCorrenteController::class);



