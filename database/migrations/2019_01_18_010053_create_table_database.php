<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDatabase extends Migration
{
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->increments('personagem_id')->unique();
            $table->timestamps();
            $table->string('nome',100);
            $table->integer('nivel');
            $table->integer('idade');
            $table->float('peso',10,3);
            $table->float('altura',5,2);
            $table->integer('experiencia');
        });

        Schema::create('racas', function (Blueprint $table) {
            $table->increments('raca_id')->unique();
            $table->string('nome',100);
            $table->text('descricao');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('profissoes', function (Blueprint $table) {
            $table->increments('profissao_id')->unique();
            $table->string('nome',100);
            $table->text('descricao');
            $table->integer('custo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('caracteristica_id')->unique();
            $table->integer('forca');
            $table->integer('habilidade');
            $table->integer('resistencia');
            $table->integer('defesa');
            $table->integer('mira');
            $table->integer('inteligencia');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('vantagens', function (Blueprint $table) {
            $table->increments('vantagem_id')->unique();
            $table->string('nome',100);
            $table->text('descricao');
            $table->integer('custo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('vantagens_raca', function (Blueprint $table) {
            $table->increments('vantagem_raca_id')->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('vantagens_personagem', function (Blueprint $table) {
            $table->increments('vantagens_personagem_id')->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('desvantagens', function (Blueprint $table) {
            $table->increments('desvantagem_id')->unique();
            $table->string('nome',100);
            $table->text('descricao');
            $table->integer('custo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('desvantagens_personagem', function (Blueprint $table) {
            $table->increments('desvantagem_personagem_id')->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('desvantagens_raca', function (Blueprint $table) {
            $table->increments('desvantagens_raca_id')->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('dinheiro', function (Blueprint $table) {
            $table->increments('dinheiro_id')->unique();
            $table->integer('cobre');
            $table->integer('prata');
            $table->integer('ouro');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('religioes', function (Blueprint $table) {
            $table->increments('religiao_id')->unique();
            $table->string('nome',100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('reinos', function (Blueprint $table) {
            $table->increments('reino_id')->unique();
            $table->string('nome',50);
            $table->text('descricao');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('regioes', function (Blueprint $table) {
            $table->increments('regiao_id')->unique();
            $table->string('nome');
            $table->text('descricao');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personagens');
        Schema::dropIfExists('racas');
        Schema::dropIfExists('profissoes');
        Schema::dropIfExists('caracteristicas');
        Schema::dropIfExists('vantagens');
        Schema::dropIfExists('vantagens_raca');
        Schema::dropIfExists('vantagens_personagem');
        Schema::dropIfExists('desvantagens');
        Schema::dropIfExists('desvantagens_personagem');
        Schema::dropIfExists('desvantagens_raca');
        Schema::dropIfExists('dinheiro');
        Schema::dropIfExists('religioes');
        Schema::dropIfExists('reinos');
        Schema::dropIfExists('regioes');
    }
}