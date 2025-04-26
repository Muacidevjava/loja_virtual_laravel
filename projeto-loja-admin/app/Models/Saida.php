<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = [
        'id',
        'produto_id',
        'qtde_saida',
        'valor_saida',
        'subtotal_saida',
        'data_saida'];

        public function produto(){
            return $this->belongsTo(Produto::class);
        }
}
