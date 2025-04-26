<?php
namespace App\Service;

use App\Models\Produto;

class EstoqueService
{
    public static function adicionarEstoque($produto_id, $qtde){
        $produto = Produto::find($produto_id);
        $qtde = (float)$qtde;
        if($produto){ // update
            $produto->estoque_atual += $qtde;
            $produto->save();
        }
    }

    public static function subtrairEstoque($produto_id, $qtde){
        $qtde = (float)$qtde;
        $produto = Produto::find($produto_id);
        if($produto){ // update
            $produto->estoque_atual -= $qtde;
            $produto->save();
        }
    }

}