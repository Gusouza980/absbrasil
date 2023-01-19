<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateConfiguracaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracaos', function (Blueprint $table) {
            $table->id();
            $table->string("rua")->nullable();
            $table->string("numero", 5)->nullable();
            $table->string("complemento", 100)->nullable();
            $table->string("bairro", 50)->nullable();
            $table->string("cidade", 50)->nullable();
            $table->string("estado", 2)->nullable();
            $table->string("cep", 10)->nullable();
            $table->string("telefone", 15)->nullable();
            $table->string("whatsapp", 15)->nullable();
            $table->string("email", 100)->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("twitter")->nullable();
            $table->string("youtube")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("pinterest")->nullable();
            $table->string("google_negocio")->nullable();
            $table->timestamps();
        });

        DB::table('configuracaos')->insert([
            'rua' => 'Rua Gomes de Carvalho',
            'numero' => '1327',
            'complemento' => 'C.J. 21',
            'bairro' => 'Vila Olímpia',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'email' => 'associacao.abs.brasil@gmail.com',
            'facebook' => 'https://www.facebook.com/ABS-Brasil-105852698310241',
            'instagram' => 'https://www.instagram.com/abs.brasil/',
            'youtube' => 'https://www.youtube.com/channel/UCjm6Wo9sSzg3L88oFicZvYg'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracaos');
    }
}
