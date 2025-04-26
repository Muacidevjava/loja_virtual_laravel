<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{
    protected $fillable = [
        'produto_id', 'imagem_id','img'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function imagem(){
        return $this->belongsTo(Imagem::class, 'imagem_id');
    }
}
