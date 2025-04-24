<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =['id', 'status_id','tipo_cliente', 'nome_razao_social',
        'nome_fantasia','cpf_cnpj', 'rg_ie', 'im', 'suframa', 'responsavel',
        'isento_ie_estadual', 'tipo_contribuinte', 'indFinal','nascimento', "senha",
        'logradouro', 'complemento', 'numero', 'bairro', 'telefone', 'celular','idestrangeiro',
        'email', 'uf', 'cep', 'ibge', 'cidade', 'nascimento', 'eh_consumidor',
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
