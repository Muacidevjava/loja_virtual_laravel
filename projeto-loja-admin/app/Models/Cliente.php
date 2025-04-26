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

    public function vendas(){
        return $this->hasMany(Venda::class);
    }

    public static function filtro($filtro, $paginas=0){
        $retorno = self::query();

        if($filtro->nome){
            $retorno->where("nome_razao_social", "like", '%'.$filtro->nome.'%');
        }

        if($filtro->cpf){
            $retorno->where("cpf_cnpj", "like", '%'.$filtro->cpf.'%');
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
