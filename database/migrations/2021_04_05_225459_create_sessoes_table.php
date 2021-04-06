<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessoes', function (Blueprint $table) {
            $table->increments('cod_sessao');
            $table->string('horario', 5);
            $table->dateTime('dt_sessao');
            $table->integer('cod_tratamento')->unsigned();
            $table->foreign('cod_tratamento')->references('cod_tratamento')->on('tratamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessoes');
    }
}
