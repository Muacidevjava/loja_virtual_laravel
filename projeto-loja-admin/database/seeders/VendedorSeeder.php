<?php

namespace Database\Seeders;

use App\Models\Vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendedor::Create([
            'nome'          => 'Carlos',
            'cpf'           => '57517502093',
            'telefone'      => '9899992466',
            'email'         => 'carlos@gmail.com',
            'senha'         => md5('1234'),
            'cep'           => '65060180',
            'logradouro'    => '1ª Travessa das Flores',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cruzeiro do Anil',
            'ibge'          => '2111300',
            'status_id'      => config("constantes.status.ATIVO")
        ]);

        Vendedor::Create([
            'nome'          => 'Maria',
            'cpf'           => '67951998001',
            'telefone'      => '9899992466',
            'email'         => 'maria@gmail.com',
            'senha'         => md5('1234'),
            'cep'           => '65060180',
            'logradouro'    => '1ª Travessa das Flores',
            'numero'        => '09',
            'uf'            => 'MA',
            'cidade'        => 'São Luís',
            'complemento'   => 'qd 20',
            'bairro'        => 'Cruzeiro do Anil',
            'ibge'          => '2111300',
            'status_id'      => config("constantes.status.ATIVO")
        ]);
    }
}
