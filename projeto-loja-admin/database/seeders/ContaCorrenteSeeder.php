<?php

namespace Database\Seeders;

use App\Models\ContaCorrente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContaCorrenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conta                  = new \stdClass();
        $conta->banco_id        = 1;
        $conta->tipo_conta_corrente_id      = 3;
        $conta->descricao       = "Conta Caixa";
        $conta->agencia         = "Conta Caixa";
        $conta->conta           = "0001";
        $cliente                = ContaCorrente::Create(objToArray($conta));
    }
}
