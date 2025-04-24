<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consumidor                     = new \stdClass();
        $consumidor->tipo_cliente       = "F";
        $consumidor->eh_consumidor      = "S";
        $consumidor->cpf_cnpj           = "11111111111";
        $consumidor->nome_razao_social  = "CLIENTE CONSUMIDOR";
        $consumidor->indFinal           = "1";
        $consumidor->logradouro         = "logradouro";
        $consumidor->numero             = "123";
        $consumidor->bairro             = "Bairro";
        $consumidor->cidade             = "sem cidade";
        $consumidor->uf                 = "UF";
        $consumidor->cep                = "000000";
        $consumidor->status_id          = config("constantes.status.ATIVO");
        $consumidor->senha              = md5('1234');
        $cliente                        = Cliente::Create(objToArray($consumidor));

        Cliente::Create([
            'nome_razao_social'  => 'Cliente Teste',
            'nome_fantasia' => 'Cliente Teste',
            'cpf_cnpj'      => '60724810005',
            'telefone'      => '9899999999',
            'email'         => 'mjailton@gmail.com',
            'senha'         => md5('1234'),
            'cep'           => '65060180',
            'logradouro'    => '1ª Travessa das Flores',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cruzeiro do Anil',
            'tipo_contribuinte'   => '9',
            'ibge'          => '2111300',
            'indFinal'      => '1',
            'status_id'      => config("constantes.status.ATIVO")
        ]);
    }
}
