<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModulesAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('modulos')) {
            Schema::create('modulos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('modulo', 150)->unique();
                $table->text('descricao');
                $table->string('ico-img', 100);
                $table->string('link', 100);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modulos');
    }
}
