<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoVenda extends Model
{
    protected $fillable=["id","tipo_venda" ];

    public function vendas(){
        return $this->hasMany(Venda::class);
    }
}
