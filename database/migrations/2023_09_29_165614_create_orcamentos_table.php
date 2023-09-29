<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('versao', 255);
            $table->string('status_orcamento', 255);
            $table->decimal('comissao', 10, 2)->nullable();
            $table->decimal('margem_lucro', 10, 2)->nullable();
            $table->decimal('fiscal', 10, 2)->nullable();
            $table->date('data_vencimento');
            $table->string('investimento', 255)->nullable();
            $table->string('prazo', 255)->nullable();
            $table->unsignedBigInteger('projeto_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
