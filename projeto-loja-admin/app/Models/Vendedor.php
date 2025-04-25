<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable =['id', 'status_id', 'nome', 'cpf', 'rg', 'nascimento','logradouro', 'complemento', 'numero',
                          'bairro', 'telefone', 'celular', 'email','comissao',
                          'uf',  'cep', 'ibge', 'cidade', 'nascimento', 'status_id','senha'
    ];
    
public function status(){
    return $this->belongsTo(Status::class);
}

}
