<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemVenda extends Model
{
    protected $fillable = [
        'produto_id', 'grade_produto_id', 'venda_id', 'quantidade', 'valor', "subtotal",
        'observacao',"subtotal_liquido",'desconto_percentual','cupom_desconto_id',
        'desconto_por_valor','desconto_por_unidade','total_desconto_item'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function venda(){
        return $this->belongsTo(Venda::class, 'venda_id');
    }
}
