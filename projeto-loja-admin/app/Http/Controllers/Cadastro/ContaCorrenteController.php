<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContaCorrenteRequest;
use App\Models\Banco;
use App\Models\ContaCorrente;
use App\Models\TipoContaCorrente;
use Illuminate\Http\Request;

class ContaCorrenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"] = ContaCorrente::with('banco')->with("tipoConta")->get();
        $dados["bancos"] = Banco::get();
        $dados["tipos"]  = TipoContaCorrente::get();
        return View("Cadastro.ContaCorrente.Index", $dados);
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
    public function store(ContaCorrenteRequest $request)
    {
         $req = request()->except(['_token']);
        try {
            ContaCorrente::Create($req);
            return redirect()->route("contacorrente.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
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
        $dados["contacorrente"] = ContaCorrente::find($id);
        $dados["lista"] = ContaCorrente::get();
        $dados["bancos"] = Banco::get();
        $dados["tipos"]  = TipoContaCorrente::get();
        return View('Cadastro.ContaCorrente.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req = $request->except(["_token", "_method"]);
        try {
            ContaCorrente::find($id)->update($req);
            return redirect()->route("contacorrente.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
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
            $contacorrente = ContaCorrente::find($id);
			if($contacorrente){
				$contacorrente->delete();
			}
            
            return redirect()->route("contacorrente.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
