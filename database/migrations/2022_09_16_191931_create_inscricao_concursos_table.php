<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaoConcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao_concursos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 60);
            $table->string("email", 60);
            $table->string("unidade", 60);
            $table->string("concurso", 60);
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
        Schema::dropIfExists('inscricao_concursos');
    }
}
