<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkVantagensPersonagens extends Migration
{
    public function up()
    {
        Schema::table('vantagens_personagem',function (Blueprint $table){
            $table->unsignedInteger('vantagem_id');
            $table->unsignedInteger('personagem_id');
            $table->foreign('vantagem_id')->references('vantagem_id')->on('vantagens')->onDelete('cascade');
            $table->foreign('personagem_id')->references('personagem_id')->on('personagens')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('vantagens_personagem',function (Blueprint $table){
            $table->dropForeign('vantagens_personagem_vantagem_id_foreign');
            $table->dropIndex('vantagens_personagem_vantagem_id_index');
            $table->dropColumn('vantagem_id');
            $table->dropForeign('vantagens_personagem_personagem_id_foreign');
            $table->dropIndex('vantagens_personagem_personagem_id_index');
            $table->dropColumn('personagem_id');
        });
    }
}
