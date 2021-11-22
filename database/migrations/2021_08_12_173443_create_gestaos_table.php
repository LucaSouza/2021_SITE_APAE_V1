<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestaos', function (Blueprint $table) {
            $table->id();
            $table->longText('presidente')->nullable();
            $table->longText('ano_inicio')->nullable();
            $table->longText('ano_fim')->nullable();
            $table->longText('diretoria_executiva')->nullable();
            $table->longText('conselho_adm')->nullable();
            $table->longText('membros_efetivos')->nullable();
            $table->longText('menbros_suplentes')->nullable();
            $table->longText('conselho_consultivo')->nullable();
            $table->longText('img')->nullable();
            $table->longText('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestaos');
    }
}
