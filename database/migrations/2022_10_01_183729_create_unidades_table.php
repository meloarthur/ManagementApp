<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        // Adiciona relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unidade');
            $table->foreign('id_unidade')->references('id')->on('unidades');
        });

        // Adiciona relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unidade');
            $table->foreign('id_unidade')->references('id')->on('produto_detalhes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        // Remove relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_id_unidade_foreign');
            $table->dropColumn('id_unidade');
        });

        // Remove relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign('produto_detalhes_id_unidade_foreign');
            $table->dropColumn('id_unidade');
        });

        Schema::dropIfExists('unidades');
    }
};
