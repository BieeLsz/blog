<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'user_id' => '1',
            'categoria_id' => '1',
            'imagem' => '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',
            'titulo' => 'Bolo di murango',
            'conteudo' => 'hmmmmm bolodimurango',
    ]);

    DB::table('postagens')->insert([
        'user_id' => '1',
        'categoria_id' => '2',
        'imagem' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII=',
        'titulo' => 'Minha segunda postagem',
        'conteudo' => 'Conteúdo da minha segunda postagem',
    ]);

    DB::table('postagens')->insert([
        'user_id' => '1',
        'categoria_id' => '3',
        'imagem' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII=',
        'titulo' => 'Minha terceira postagem',
        'conteudo' => 'Conteúdo da minha terceira postagem',
    ]);
    }
}
