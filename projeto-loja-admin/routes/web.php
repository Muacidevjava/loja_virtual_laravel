<?php

use App\Http\Controllers\Cadastro\CategoriaController;
use App\Http\Controllers\Cadastro\StatusController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"] )->name("home");

Route::resource("/status", StatusController::class);

Route::resource("/categoria", CategoriaController::class);

Route::put('/categorias/{id}', 'CategoriaController@update')->name('categoria.update');

