<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use stdClass;

class ClienteController extends Controller
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

        $dados["lista"] = Cliente::filtro($filtro);
        $dados["filtro"] = $filtro;
        return View("Cadastro.Cliente.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["clienteJs"] = true;
        return View("Cadastro.Cliente.Create", $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request)
    {
        $req["status_id"]                = config('constantes.status.ATIVO');
        $req = request()->except(["_token"]);
        try {
            $req["status_id"]                = config('constantes.status.ATIVO');
            Cliente::Create($req);
            return redirect()->route("cliente.index")->with("msg_sucesso", "inserido com sucesso");
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
