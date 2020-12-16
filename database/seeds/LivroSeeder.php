<?php

use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'nome' => 'O Senhor dos Anéis: A Sociedadade do Anel', 
            'ano_edicao' => 'Janeiro 2000', 
            'ano_publicacao' => '2001',
            'autor' => 'J.R.R Tolkien',
            'editora' => 'Martin Fontes',
            'estoque_total' => 5,
            'estoque_disponivel' => 5
            ]);

            DB::table('livros')->insert([
                'nome' => 'O Senhor dos Anéis: As Duas Torres', 
                'ano_edicao' => 'Janeiro 2000', 
                'ano_publicacao' => '2001',
                'autor' => 'J.R.R Tolkien',
                'editora' => 'Martin Fontes',
                'estoque_total' => 5,
                'estoque_disponivel' => 5
                ]);

                DB::table('livros')->insert([
                    'nome' => 'O Senhor dos Anéis: O Retorno do Rei', 
                    'ano_edicao' => 'Janeiro 2000', 
                    'ano_publicacao' => '2001',
                    'autor' => 'J.R.R Tolkien',
                    'editora' => 'Martin Fontes',
                    'estoque_total' => 5,
                    'estoque_disponivel' => 5
                    ]);


    }

    
}
