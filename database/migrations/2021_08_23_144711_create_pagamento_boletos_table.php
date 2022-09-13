<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoBoletosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_boletos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("venda_id");
            $table->unsignedInteger("charge_id");
            $table->string("codigo_barra")->nullable();
            $table->string("link")->nullable();
            $table->string("pdf")->nullable();
            $table->date("expira")->nullable();
            $table->string("status", 30)->nullable();
            $table->double("total")->nullable();
            $table->timestamps();
            $table->foreign('venda_id')->references('id')->on('vendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento_boletos');
    }
}
