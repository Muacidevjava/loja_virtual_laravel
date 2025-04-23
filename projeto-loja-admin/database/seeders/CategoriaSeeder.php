<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria ::firstOrCreate([
            'categoria' => 'Panela'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Cuzcuzeira'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Copo'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Panela'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Caneca'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Papeiro'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Leiteira'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Frigideira'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Bacia'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Balde'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Assadeira'
        ]);

        Categoria::firstOrCreate([
            'categoria' => 'Baquelite'
        ]);


    }
}
