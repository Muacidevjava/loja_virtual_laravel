<?php

namespace Database\Seeders;

use App\Models\TipoContaCorrente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoContaCorrenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoContaCorrente::Create([ 'tipo_conta'  => "Conta Corrente" ]);
        TipoContaCorrente::Create([ 'tipo_conta'  => "Poupança" ]);
        TipoContaCorrente::Create([ 'tipo_conta'  => "Carteira/Caixa" ]);
        TipoContaCorrente::Create([ 'tipo_conta'  => "Investimento" ]);
        TipoContaCorrente::Create([ 'tipo_conta'  => "Cartão Crédito" ]);
        TipoContaCorrente::Create([ 'tipo_conta'  => "Outros" ]);
    }
}
