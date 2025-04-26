<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemVariacaoGrade extends Model
{
    protected $fillable = [
        'variacao_grade_id', 'descricao', 'valor',
     ];

     public function variacao(){
        return $this->belongsTo(VariacaoGrade::class, 'variacao_grade_id');
    }
}
