<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkRegioes extends Migration
{
    public function up()
    {
        Schema::table('regioes', function (Blueprint $table) {
            $table->unsignedInteger('reino_id');
            $table->foreign('reino_id')->references('reino_id')->on('reinos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('regioes', function (Blueprint $table) {
            $table->dropForeign('regioes_reino_id_foreign');
            $table->dropIndex('regioes_preino_id_index');
            $table->dropColumn('personagem_id');
        });
    }
}
