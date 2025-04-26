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

public function vendas(){
    return $this->hasMany(Venda::class);
}
public static function filtro($filtro, $paginas=0){
    $retorno = self::query();

    if($filtro->nome){
        $retorno->where("nome", "like", '%'.$filtro->nome.'%');
    }

    if($filtro->cpf){
        $retorno->where("cpf", "like", '%'.$filtro->cpf.'%');
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
