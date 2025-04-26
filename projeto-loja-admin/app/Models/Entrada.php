<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'id',
        'produto_id',
        'qtde_entrada',
        'valor_entrada',
        'subtotal_entrada',
        'data_entrada'
    ];
    public function produto(){
        return $this->belongsTo(Produto::class);
     }
    //
}
