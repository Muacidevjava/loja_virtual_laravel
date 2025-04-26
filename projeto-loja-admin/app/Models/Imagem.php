<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $fillable = [
        'categoria_id','imagem','titulo'
     ];

     public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'imagem_produtos', 'imagem_id', 'produto_id')->withPivot('id');
    }
}
