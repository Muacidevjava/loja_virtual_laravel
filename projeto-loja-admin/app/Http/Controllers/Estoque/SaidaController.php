<?php

namespace App\Http\Controllers\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    public function index(Request $request){
        $filtro             = new \stdClass();
        $filtro->data1      = $request->data1 ?? hoje();
        $filtro->data2      = $request->data2 ??  hoje();
        $filtro->produto_id = $request->produto_id ?? null;


        $dados["lista"]     = Saida::filtro($filtro);
        $dados["produtos"]  = Produto::get();
        $dados["filtro"]    = $filtro;
        $dados["saidaJs"] = true;
        return view("Estoque.Saida.Create", $dados);
    }

    public function salvarJs(Request $request)  {
        $retorno = new \stdClass();
        try {

            $obj                      = new \stdClass();
            $obj->produto_id          =  $request->produto_id ;
            $obj->qtde_saida        =  getFloat($request->qtde) ;
            $obj->valor_saida       =  getFloat($request->valor);

            $obj->subtotal_saida    =  $obj->qtde_saida * $obj->valor_saida;
            $obj->data_saida        = date("Y-m-d");
            $saida = Saida::create(objToArray($obj));

            $retorno->tem_erro = false;
            return response()->json($retorno);
        } catch (\Exception $e) {
            $retorno->tem_erro = true;
            $retorno->erro = $e->getMessage();
            return response()->json($retorno);
        }


    }
}
