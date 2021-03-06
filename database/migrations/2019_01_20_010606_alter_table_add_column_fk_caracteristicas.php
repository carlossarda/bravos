<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkCaracteristicas extends Migration
{
    public function up()
    {
        Schema::table('caracteristicas', function (Blueprint $table) {
            $table->unsignedInteger('personagem_id')->unique();
            $table->foreign('personagem_id')->references('personagem_id')->on('personagens')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('caracteristicas', function (Blueprint $table){
            $table->dropForeign('caracteristicas_personagem_id_foreign');
            $table->dropIndex('caracteristicas_personagem_id_index');
            $table->dropColumn('personagem_id');
        });
    }
}
