<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMovimento extends Model
{
    protected $fillable=["id","tipo_movimento" ];

    public function tipo_movimento(){
        return $this->belongsTo(TipoMovimento::class);
    }
}
