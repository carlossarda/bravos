<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumnFkDesvantagensRaca extends Migration
{
    public function up()
    {
        Schema::table('desvantagens_raca', function (Blueprint $table) {
            $table->unsignedInteger('desvantagem_id');
            $table->unsignedInteger('raca_id');
            $table->foreign('desvantagem_id')->references('desvantagem_id')->on('desvantagens')->onDelete('cascade');
            $table->foreign('raca_id')->references('raca_id')->on('racas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('desvantagens_raca', function (Blueprint $table) {
            $table->dropForeign('desvantagens_raca_desvantagem_id_foreign');
            $table->dropIndex('desvantagens_raca_desvantagem_id_index');
            $table->dropColumn('desvantagem_id');
            $table->dropForeign('desvantagens_raca_raca_id_foreign');
            $table->dropIndex('desvantagens_raca_raca_id_index');
            $table->dropColumn('raca_id');
        });
    }
}
