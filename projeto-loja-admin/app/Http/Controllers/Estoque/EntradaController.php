<?php

namespace App\Http\Controllers\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Entrada;
use App\Models\Produto;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index(){
        $dados["lista"]     = Entrada::get();
        $dados["produtos"]  = Produto::get();
        $dados["entradaJs"] = true;
        
        return view("Estoque.Entrada.Create", $dados);
    }

    public function salvarJs(Request $request)  {
        $retorno = new \stdClass();
        try {

            $obj                      = new \stdClass();
            $obj->produto_id          =  $request->produto_id ;
            $obj->qtde_entrada        =  getFloat($request->qtde) ;
            $obj->valor_entrada       =  getFloat($request->valor);

            $obj->subtotal_entrada    =  $obj->qtde_entrada * $obj->valor_entrada;
            $obj->data_entrada        = date("Y-m-d");
            $entrada = Entrada::create(objToArray($obj));

            $retorno->tem_erro = false;
            return response()->json($retorno);
        } catch (\Exception $e) {
            $retorno->tem_erro = true;
            $retorno->erro = $e->getMessage();
            return response()->json($retorno);
        }


    }

}
