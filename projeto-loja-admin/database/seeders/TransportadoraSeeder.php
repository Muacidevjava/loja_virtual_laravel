<?php

namespace Database\Seeders;

use App\Models\Transportadora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run(): void
    {
        Transportadora::Create([
            'razao_social'          => 'Correios',
            'nome_fantasia'          => 'Correios',
            'cnpj'           => '34028316000707',
            'telefone'      => '9899992466',
            'email'         => 'correios@gmail.com',
            'cep'           => '65074410',
            'logradouro'    => 'Rua qualquer',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cohama',
            'ibge'          => '2111300'
        ]);

        Transportadora::Create([
            'razao_social'          => 'GRANERO TRANSPORTES LTDA',
            'nome_fantasia'          => 'GRANERO TRANSPORTES LTDA',
            'cnpj'           => '34028316000707',
            'telefone'      => '9899992466',
            'email'         => 'correios@gmail.com',
            'cep'           => '04571900',
            'logradouro'    => 'Avenida Eng Luiz Carlos Berrini',
            'numero'        => '105',
            'uf'            => 'SP',
            'cidade'        => 'São Paulo',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cidade Moncoes',
            'ibge'          => '2111300'
        ]);
        Transportadora::Create([
            'razao_social'          => 'TRANSPORTADORA DE CARGA LTDA',
            'nome_fantasia'          => 'TRANSPORTADORA DE CARGA LTDA',
            'cnpj'           => '34028316000707',
            'telefone'      => '9899992466',
            'email'         => 'correios@gmail.com',
            'cep'           => '04571900',
            'logradouro'    => 'Avenida Eng Luiz Carlos Berrini',
            'numero'        => '105',
            'uf'            => 'SP',
            'cidade'        => 'São Paulo',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cidade Moncoes',
            'ibge'          => '2111300'
        ]);


    
    }
}
