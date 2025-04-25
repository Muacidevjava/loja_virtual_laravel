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

public static function filtro($filtro, $paginas=0){
    $retorno = self::query();

    if($filtro->nome){
        $retorno->where("razao_social", "like", '%'.$filtro->nome.'%');
    }

    if($filtro->cpf){
        $retorno->where("cnpj", "like", '%'.$filtro->cpf.'%');
    }

    if($filtro->email){
        $retorno->where("email", "like", '%'.$filtro->email.'%');
    }

    if($paginas>0){
        $retorno = $retorno->paginate($paginas);
    }else{
        $retorno = $retorno->get();
    }

    return $retorno;

}
}
