<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('titulo')->nullable();
            $table->longText('descricao')->nullable();
            $table->longText('texto')->nullable();
            $table->longText('img')->nullable();
            $table->longText('data_post')->nullable();
            $table->integer('tipo_post')->nullable();
            $table->integer('sub_tipo')->nullable();
            $table->integer('destaque')->nullable();
            $table->string('ativo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
