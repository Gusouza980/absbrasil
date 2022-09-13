<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelaCarnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcela_carnes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pagamento_carne_id");
            $table->unsignedBigInteger("charge_id");
            $table->tinyInteger("parcela");
            $table->double("valor", 8, 2);
            $table->string("status", 30)->nullable();
            $table->date("data_expiracao");
            $table->string("link");
            $table->timestamps();
            $table->foreign('pagamento_carne_id')->references('id')->on('pagamento_carnes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcela_carnes');
    }
}
