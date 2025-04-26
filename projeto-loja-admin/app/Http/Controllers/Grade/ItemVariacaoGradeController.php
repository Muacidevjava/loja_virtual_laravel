<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemVariacaoGradeRequest;
use App\Models\ItemVariacaoGrade;
use App\Models\VariacaoGrade;
use Illuminate\Http\Request;

class ItemVariacaoGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"]             = ItemVariacaoGrade::get();
        $dados["variacoes"]         = VariacaoGrade::get();
        $dados["variacaoGradeJs"]   = true;
        return view("Grade.ItemVariacaoGrade.Index", $dados);
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
    public function store(ItemVariacaoGradeRequest $request)
    {
        try {
            $item                    = new \stdClass();
            $item->variacao_grade_id = Request()->variacao_grade_id;
            $item->valor             = Request()->valor;
            $tem = ItemVariacaoGrade::where(["variacao_grade_id"=>$item->variacao_grade_id , "valor"=>$item->valor])->first();
            if($tem){
                throw(new \Exception('Ja existe um registro com este valor.'));
            }
            ItemVariacaoGrade::Create(objToArray($item));
            return redirect()->route('itemvariacaograde.index')->with('msg_sucesso', "Registro Alterado com Sucesso.");

        } catch (\Exception $e) {
            return redirect()->route('itemvariacaograde.index')->with('msg_erro', "Erro: ". $e->getMessage());
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
        $dados["itemvariacaograde"] = ItemVariacaoGrade::find($id);
        $dados["lista"]             = ItemVariacaoGrade::get();
        $dados["variacoes"]         = VariacaoGrade::get();
        $dados["variacaoGradeJs"]   = true;
        return view('Grade.ItemVariacaoGrade.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $req     =   $request->except(["_token","_method"]);
            ItemVariacaoGrade::where("id", $id)->update($req);
            return redirect()->route("itemvariacaograde.index")->with('msg_sucesso', "item alterado com sucesso.");;
        } catch (\Throwable $th) {
            return redirect()->back()->with('msg_erro', "Erro: ". $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $h = ItemVariacaoGrade::find($id);
            if($h){
                $h->delete();
            }
            return redirect()->back()->with('msg_sucesso', "item apagado com sucesso.");
        }catch (\Exception $e){
            return redirect()->back()->with('msg_erro', "Erro: " . $e->getMessage());
        }

    }
}
