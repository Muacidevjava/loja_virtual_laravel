<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $fillable = [
        "id",
        "status_id",
        "estorno",
        "tipo_movimento_id",
        "produto_id",
        "compra_id",
        "venda_id",
        "pedido_id",
        "entrada_avulsa_id",
        "saida_avulsa_id",
        "ent_sai",
        "data_movimento",
        "qtde_movimento",
        "valor_movimento",
        "subtotal_movimento",
        "descricao",
        "saldoestoque",
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function tipo_movimento(){
        return $this->belongsTo(TipoMovimento::class);
    }

    public function entrada(){
        return $this->belongsTo(Entrada::class);
    }

    public function saida(){
        return $this->belongsTo(Saida::class);
    }

}

