<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('cod_paciente');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->char('sexo', 1);
            $table->decimal('peso', 5, 2);
            $table->decimal('altura', 3, 2);
            $table->dateTime('dt_nascimento');
            $table->dateTime('dt_cadastro');
            $table->string('telefone', 15);
            $table->integer('cod_endereco')->unsigned();
            $table->foreign('cod_endereco')->references('cod_endereco')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
