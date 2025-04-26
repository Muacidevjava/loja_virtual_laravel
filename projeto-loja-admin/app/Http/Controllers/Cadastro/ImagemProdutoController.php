<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Models\Imagem;
use App\Models\Produto;
use Illuminate\Http\Request;

class ImagemProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["produtos"]   = Produto::get();
        $dados["imagens"] = Imagem::get();
        $dados["lista"]     = Produto::has('imagens')->with('imagens')->take(10)->get();
       return view("Cadastro.ImagemProduto.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
