<?php

use Illuminate\Database\Seeder;

class menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Pagina inicial
        DB::table('menu')->insert([
        	'link' => 'index',
        	'texto' => 'Pagina inicial'
        ]);

        // Contato
        DB::table('menu')->insert([
        	'link' => 'contato',
        	'texto' => 'Contato'
        ]);

        // Cadastro do idoso
        DB::table('menu')->insert([
        	'link' => 'cadastrar-paciente',
        	'texto' => 'Cadastro do idoso'
        ]);
    }
}
