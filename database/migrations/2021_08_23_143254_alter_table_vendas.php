<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('vendas', function (Blueprint $table) {
            $table->unsignedBigInteger("aluno_id");
            $table->unsignedBigInteger("carrinho_id");
            $table->string("codigo", 16);
            $table->double("total");

            // 0 => Boleto
            // 1 => Cartao
            $table->tinyInteger("forma");

            // 0 => Gerencianet
            // 1 => Cielo
            $table->tinyInteger("gateway");

            $table->tinyInteger("parcelas")->default(1);
            $table->double("valor_parcela");
            $table->double("desconto");

            // 0 => Aguardando Pagamento
            // 1 => Pagamento Confirmado
            // 2 => Cancelado
            $table->tinyInteger("status");
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('carrinho_id')->references('id')->on('carrinhos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
