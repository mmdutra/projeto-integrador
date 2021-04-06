<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamentos', function (Blueprint $table) {
            $table->increments('cod_tratamento');
            $table->integer('cod_paciente')->unsigned();
            $table->integer('cod_profissional')->unsigned();
            $table->integer('qtd_sessoes');
            $table->string('tipo_tratamento');
            $table->dateTime('dt_inicio');
            $table->dateTime('dt_fim');
            $table->foreign('cod_paciente')->references('cod_paciente')->on('pacientes');
            $table->foreign('cod_profissional')->references('cod_profissional')->on('profissionais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamentos');
    }
}
