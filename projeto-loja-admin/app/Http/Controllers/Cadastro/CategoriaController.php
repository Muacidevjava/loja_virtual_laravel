<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use stdClass;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"] = Categoria::get();
        return View("Cadastro.Categoria.Index", $dados);
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
    public function store(CategoriaRequest $request)
    {
        $req = request()->except(['_token']);
        try {
            Categoria::Create($req);
            return redirect()->route("categoria.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
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
        $dados["categoria"] = Categoria::find($id);
        $dados["lista"] = Categoria::get();
        return View('Cadastro.Categoria.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req = $request->except(["_token", "_method"]);
        try {
            Categoria::find($id)->update($req);
            return redirect()->route("categoria.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }

    public function salvarJs(Request $request){
        $retorno = new stdClass;
        $req = $request->except(["_token"]);
        try {
            Categoria::Create($req);
            $retorno->tem_erro = false;
            $retorno->lista = Categoria::get();
            return response()->json($retorno);
        } catch (\Throwable $th) {
            $retorno->tem_erro = true;
            $retorno->erro = $th->getMessage();
            $retorno->lista = Categoria::get();
            return response()->json($retorno);
        }

    }
    public function destroy(string $id)
    {
        try {
            $categoria = Categoria::find($id);
            $categoria->delete();
            return redirect()->route("categoria.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }

}
