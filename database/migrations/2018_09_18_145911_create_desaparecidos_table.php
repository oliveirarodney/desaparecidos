<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->date('datanasc');
            $table->date('dataultimo');
            $table->binary('foto');
            $table->string('estadodes', 20);
            $table->string('cidadedes', 30);
            $table->string('endvistoultimo', 50);
            $table->text('caracteristicasfis');
            $table->text('vestimenta');
            $table->integer('usuario_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desaparecidos');
    }
}
