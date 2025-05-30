<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\TipoVenda;
use App\Models\Unidade;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            StatusSeeder::class,
            CategoriaSeeder::class,
            UnidadeSeeder::class,
            BancoSeeder::class,
            TipoContaCorrenteSeeder::class,
            ContaCorrenteSeeder::class,
            ClienteSeeder::class,
            FornecedorSeeder::class,
            VendedorSeeder::class,
            TransportadoraSeeder::class,
            ProdutoSeeder::class,
            TipoMovimentoSeeder::class,
            TipoVendaSeeder::class,
            


            

        ]);


    }
}
