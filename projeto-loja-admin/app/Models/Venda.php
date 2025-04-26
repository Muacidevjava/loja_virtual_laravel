<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'id','usuario_id', 'tipo_venda_id', 'status_id', 'vendedor_id', 'cliente_id',
        'cupom_desconto_id','status_financeiro_id', 'uuid', 'titulo', 'valor_venda',
        'nota_nome','nota_cpf','nota_cnpj','despesas_outras',
        'data_venda', 'xml_path','chave','nnf','forma_pagamento',

        'valor_total_venda', 'valor_bruto','valor_frete','valor_imposto','desconto_por_valor',
        'desconto_por_percentual','valor_total_do_desconto','valor_desconto_cupom','total_desconto_item','acrescimo_por_valor',
        'acrescimo_por_percentual','valor_total_do_acrescimo','valor_total_liquido'
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function vendedor(){
        return $this->belongsTo(Vendedor::class, 'vendedor_id');
    }
}
