<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkPersonagens extends Migration
{
    public function up()
    {
        Schema::table('personagens', function (Blueprint $table){
            $table->unsignedInteger('raca_id');
            $table->unsignedInteger('religiao_id');
            $table->unsignedInteger('profissao_id');
            $table->unsignedInteger('caracteristica_id');
            $table->unsignedInteger('dinheiro_id');
            $table->unsignedInteger('regiao_id');
            $table->foreign('raca_id')->references('raca_id')->on('racas')->onDelete('cascade');
            $table->foreign('religiao_id')->references('religiao_id')->on('religioes')->onDelete('cascade');
            $table->foreign('profissao_id')->references('profissao_id')->on('profissoes')->onDelete('cascade');
            $table->foreign('caracteristica_id')->references('caracteristica_id')->on('caracteristicas')->onDelete('cascade');
            $table->foreign('dinheiro_id')->references('dinheiro_id')->on('dinheiro')->onDelete('cascade');
            $table->foreign('regiao_id')->references('regiao_id')->on('regioes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('personagens', function (Blueprint $table){
            $table->dropForeign('personagens_raca_id_foreign');
            $table->dropIndex('personagens_raca_id_index');
            $table->dropForeign('personagens_religiao_id_foreign');
            $table->dropIndex('personagens_religiao_id_index');
            $table->dropForeign('personagens_profissao_id_foreign');
            $table->dropIndex('personagens_profissao_id_index');
            $table->dropForeign('personagens_caracteristica_id_foreign');
            $table->dropIndex('personagens_caracteristica_id_index');
            $table->dropForeign('personagens_dinheiro_id_foreign');
            $table->dropIndex('personagens_dinheiro_id_index');
            $table->dropForeign('personagens_regiao_id_foreign');
            $table->dropIndex('personagens_regiao_id_index');
            $table->dropColumn('raca_id');
            $table->dropColumn('religiao_id');
            $table->dropColumn('profissao_id');
            $table->dropColumn('caracteristica_id');
            $table->dropColumn('dinheiro_id');
            $table->dropColumn('regiao_id');
        });
    }
}
