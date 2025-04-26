<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportadoraRequest;
use App\Models\Transportadora;
use Illuminate\Http\Request;
use stdClass;

class TransportadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
public function index(Request $request)
{
    $filtro                = new stdClass;
    $filtro->nome          = $request->nome ?? null;
    $filtro->cpf           = $request->cpf ?? null;
    $filtro->email         = $request->email ?? null;

    $dados["lista"] = Transportadora::filtro($filtro);
    $dados["filtro"] = $filtro;
    return View("Cadastro.Transportadora.Index", $dados);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["transportadoraJs"] = true;
        return View("Cadastro.Transportadora.Create", $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransportadoraRequest $request)
    {
        $req["status_id"]                = config('constantes.status.ATIVO');
        $req = request()->except(["_token"]);
        try {
            $req["status_id"]                = config('constantes.status.ATIVO');
            Transportadora::Create($req);
            return redirect()->route("transportadora.index")->with("msg_sucesso", "inserido com sucesso");
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
        $dados["transportadora"]   = Transportadora::find($id);
        $dados["transportadoraJs"] = true;
        return View("Cadastro.Transportadora.Create", $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransportadoraRequest $request, $id)
    {
        $req = request()->except(["_token"]);
        try {
            $tranportadora = Transportadora::find($id);
            $tranportadora->update($req);
            return redirect()->route("transportadora.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
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
            $transportadora = Transportadora::find($id);
            $transportadora->delete();
            return redirect()->route("transportadora.index")->with("msg_sucesso", "excluido com sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
