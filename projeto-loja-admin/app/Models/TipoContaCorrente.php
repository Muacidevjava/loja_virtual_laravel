<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoContaCorrente extends Model
{
    protected $fillable=["id","tipo_conta" ];

    public function contas(){
        return $this->hasMany(ContaCorrente::class);
    }
}
