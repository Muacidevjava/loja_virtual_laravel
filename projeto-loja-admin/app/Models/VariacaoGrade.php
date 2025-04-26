<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariacaoGrade extends Model
{
    protected $fillable = [  'variacao' ];

    public function variacao(){
        return $this->belongsTo(VariacaoGrade::class, 'variacao_grade_id');
    }
}
