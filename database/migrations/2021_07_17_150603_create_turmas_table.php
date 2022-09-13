<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("curso_id")->nullable();
            $table->string("nome")->nullable();
            $table->date("data")->nullable();
            $table->time("horario")->nullable();
            $table->tinyInteger("periodo")->nullable();
            $table->string("local")->nullable();
            $table->double("preco")->nullable();
            $table->integer("parcelas")->nullable();
            $table->boolean("aberto")->nullable();
            $table->boolean("ativo")->defalt(false);
            $table->integer("vagas")->default(0);
            $table->integer("inscritos")->default(0);
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
        Schema::dropIfExists('turmas');
    }
}
