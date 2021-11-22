<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->longText('titulo')->nullable();
            $table->longText('descricao')->nullable();
            $table->longText('data')->nullable();
            $table->longText('hora')->nullable();
            $table->longText('palestrante')->nullable();
            $table->longText('valor')->nullable();
            $table->longText('ativo')->nullable();
            $table->integer('destaque')->nullable();
            $table->longText('img')->nullable();
            $table->integer('tipo_post')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
