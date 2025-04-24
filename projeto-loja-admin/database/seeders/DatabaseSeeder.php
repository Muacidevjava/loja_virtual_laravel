<?php

namespace Database\Seeders;

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

        ]);


    }
}
