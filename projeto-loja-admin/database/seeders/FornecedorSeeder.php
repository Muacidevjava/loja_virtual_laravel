<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Fornecedor::Create([
            'razao_social'  => 'Fornecedor teste',
            'cnpj'          => '09689284000140',
            'telefone'      => '9899992466',
            'email'         => 'fornecedor@gmail.com',
            'cep'           => '65074410',
            'logradouro'    => 'Rua José do Patrocínio',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cohama',
            'ibge'          => '2111300',
            'status_id'     =>  config("constantes.status.ATIVO")
        ]);
    }
}
