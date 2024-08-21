<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Bolos',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Tortas',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Automoveis',
        ]);
    }
}
