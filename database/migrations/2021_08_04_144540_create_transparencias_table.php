<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransparenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transparencias', function (Blueprint $table) {
            $table->id();
            $table->longText('titulo')->nullable();
            $table->longText('ano')->nullable();
            $table->longText('ativo')->nullable();
            $table->longText('link')->nullable();
            $table->longText('tipo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transparencias');
    }
}
