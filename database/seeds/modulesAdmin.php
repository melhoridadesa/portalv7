<?php

use Illuminate\Database\Seeder;

class modulesAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert([
        	'modulo' => 'Cadastrar menu',
        	'descricao' => 'Modulo para cadastro de menu do melhor idade',
        	'ico-img' => 'fa-bars',
        	'link' => 'cadastrar-menu',
        ]);
        DB::table('modulos')->insert([
        	'modulo' => 'Cadastrar Conteudo',
        	'descricao' => 'Modulo para cadastro de conteudo do melhor idade',
        	'ico-img' => 'fa-bars',
        	'link' => 'cadastrar-conteudo',
        ]);
    }
}
