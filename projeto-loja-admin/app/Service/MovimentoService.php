<?php
namespace App\Service;

use App\Models\Movimento;

class MovimentoService
{
    public static function inserir($mov ){
        $saldo_anterior         = Movimento::saldoEstoque($mov->produto_id);
        $qtde                   = ($mov->ent_sai=="E") ? $mov->qtde_movimento : - $mov->qtde_movimento;
        $mov->saldoestoque      = $saldo_anterior + ($qtde) ;
        return Movimento::create(objToArray($mov));
    }
}