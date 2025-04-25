<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=["id","status", "descricao" ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
