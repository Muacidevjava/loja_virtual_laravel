<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable =[  
        'id', 'status_id', 'razao_social', 'nome_fantasia', 'cnpj', 
        'logradouro', 'complemento', 'numero','bairro','telefone',
        'celular', 'email', 'uf', 'cep', 'ibge', 'rg_ie', 'im', 'tipo_contribuinte', 'cidade'
];

public function status(){
    return $this->belongsTo(Status::class);
}
}
