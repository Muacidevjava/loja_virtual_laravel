<?php

use App\Http\Controllers\Cadastro\BancoController;
use App\Http\Controllers\Cadastro\CategoriaController;
use App\Http\Controllers\Cadastro\ClienteController;
use App\Http\Controllers\Cadastro\ContaCorrenteController;
use App\Http\Controllers\Cadastro\FornecedorController;
use App\Http\Controllers\Cadastro\ImagemController;
use App\Http\Controllers\Cadastro\ImagemProdutoController;
use App\Http\Controllers\Cadastro\ProdutoController;
use App\Http\Controllers\Cadastro\StatusController;
use App\Http\Controllers\Cadastro\TipoContaCorrenteController;
use App\Http\Controllers\Cadastro\TransportadoraController;
use App\Http\Controllers\Cadastro\UnidadeController;
use App\Http\Controllers\Cadastro\VendedorController;
use App\Http\Controllers\Estoque\EntradaController;
use App\Http\Controllers\Estoque\SaidaController;
use App\Http\Controllers\Grade\ItemVariacaoGradeController;
use App\Http\Controllers\Grade\VariacaoGradeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilController;
use App\Http\Controllers\Venda\VendaController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"] )->name("home");

Route::resource("/status", StatusController::class);

Route::resource("/categoria", CategoriaController::class);
Route::post("/categoria/salvarJs", [CategoriaController::class, "salvarJs"])->name('categoria.salvarJs');


Route::resource("/unidade", UnidadeController::class);

Route::resource("/banco", BancoController::class);

Route::resource("/tipocontacorrente", TipoContaCorrenteController::class);

Route::resource("/contacorrente", ContaCorrenteController::class);

Route::get("/cliente/pesquisa",[ClienteController::class,"pesquisa"])->name('cliente.pesquisa');
Route::resource("/cliente", ClienteController::class);
Route::get("/cliente/util/buscarcnpj/{cnpj}", [UtilController::class, "buscarCNPJ"])->name("buscarCNPJ");

Route::resource("/fornecedor", FornecedorController::class);
Route::get("/fornecedor/util/buscarcnpj/{cnpj}", [UtilController::class, "buscarCNPJ"])->name("buscarCNPJ");

Route::get("/vendedor/pesquisa",[VendedorController::class,"pesquisa"])->name('vendedor.pesquisa');
Route::resource("/vendedor", VendedorController::class);


Route::resource("/transportadora", TransportadoraController::class);
Route::get("/transportadora/util/buscarcnpj/{cnpj}", [UtilController::class, "buscarCNPJ"])->name("buscarCNPJ");


Route::get("/produto/pesquisa",[ProdutoController::class,"pesquisa"])->name('produto.pesquisa');
Route::resource("/produto", ProdutoController::class);

Route::resource('/imagem',ImagemController::class);

Route::resource('/variacaograde', VariacaoGradeController::class);

Route::resource('/imagemproduto', ImagemProdutoController::class);

Route::resource("/itemvariacaograde", ItemVariacaoGradeController::class);

Route::get("/entrada", [EntradaController::class,"index"])->name("entrada.index");

Route::post("/entrada/salvarJs", [EntradaController::class,"salvarJs"])->name("entrada.salvarJs");

Route::post("/saida/salvarJs", [SaidaController::class,"salvarJs"])->name("saida.salvarJs");
Route::get("/saida", [SaidaController::class,"index"])->name("saida.index");

Route::resource("/venda", VendaController::class);



