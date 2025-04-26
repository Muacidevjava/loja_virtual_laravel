<?php

namespace Database\Seeders;

use App\Models\TipoMovimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoMovimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(config("constantes.tipo_movimento") as $chave=>$valor){
            TipoMovimento::Create([
                "tipo_movimento"     =>$chave            ]
            );
        }
    }
}
