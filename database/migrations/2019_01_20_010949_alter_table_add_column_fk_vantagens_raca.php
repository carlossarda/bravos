<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkVantagensRaca extends Migration
{
    public function up()
    {
        Schema::table('vantagens_raca', function (Blueprint $table) {
            $table->unsignedInteger('vantagem_id');
            $table->unsignedInteger('raca_id');
            $table->foreign('vantagem_id')->references('vantagem_id')->on('vantagens')->onDelete('cascade');
            $table->foreign('raca_id')->references('raca_id')->on('racas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('vantagens_raca', function (Blueprint $table) {
            $table->dropForeign('vantagens_raca_vantagem_id_foreign');
            $table->dropIndex('vantagens_raca_vantagem_id_index');
            $table->dropColumn('vantagem_id');
            $table->dropForeign('vantagens_raca_raca_id_foreign');
            $table->dropIndex('vantagens_raca_raca_id_index');
            $table->dropColumn('raca_id');
        });
    }
}
