<?php

namespace App\Http\Controllers\Venda;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendaRequest;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"] = Venda::get();
        return View("Venda.Venda.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["vendaJs"]           = true;
        return view("Venda.Venda.Create", $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendaRequest $request)
    {
        $req = request()->except(["_token"]);
        try {
            $req["status_id"]           = config('constantes.status.ATIVO');
            $vendaNova                  = Venda::Create(objToArray($req));
            return redirect()->route("venda.edit", $vendaNova->id)->with("msg_sucesso", "Registro Inserido com Sucesso");
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
