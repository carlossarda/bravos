<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkDesvantagensPersonagem extends Migration
{
    public function up()
    {
        Schema::table('desvantagens_personagem', function (Blueprint $table) {
            $table->unsignedInteger('desvantagem_id');
            $table->unsignedInteger('personagem_id');
            $table->foreign('desvantagem_id')->references('desvantagem_id')->on('desvantagens')->onDelete('cascade');
            $table->foreign('personagem_id')->references('personagem_id')->on('personagens')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('desvantagens_personagem',function (Blueprint $table){
            $table->dropForeign('desvantagens_personagem_desvantagem_id_foreign');
            $table->dropIndex('desvantagens_personagem_desvantagem_id_index');
            $table->dropColumn('desvantagem_id');
            $table->dropForeign('desvantagens_personagem_personagem_id_foreign');
            $table->dropIndex('desvantagens_personagem_personagem_id_index');
            $table->dropColumn('personagem_id');
        });
    }
}
