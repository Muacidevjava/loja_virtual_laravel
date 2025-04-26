<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\VariacaoGradeRequest;
use App\Models\Imagem;
use App\Models\Produto;
use App\Models\VariacaoGrade;
use Illuminate\Http\Request;

class VariacaoGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"] = VariacaoGrade::get();
        return view("Grade.VariacaoGrade.Index", $dados);
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
    public function store(VariacaoGradeRequest $request)
    {
        $req = request()->except(["_token"]);
        try {
            VariacaoGrade::Create($req);
            return redirect()->route("variacaograde.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
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
        $dados["variacaograde"]     = VariacaoGrade::find($id);
        $dados["lista"]    = VariacaoGrade::get();
        return view('Grade.VariacaoGrade.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req     =   $request->except(["_token","_method"]);
        try {
            VariacaoGrade::where("id", $id)->update($req);
            return redirect()->route("variacaograde.index")->with('msg_sucesso', "item alterado com sucesso.");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $vendedor = VariacaoGrade::find($id);
            $vendedor->delete();
            return redirect()->route("variacaograde.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
