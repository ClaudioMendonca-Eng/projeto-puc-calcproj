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
        Schema::create('empresa_sistemas', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('cep');
            $table->string('responsavel');
            $table->string('telefone');
            $table->string('email');
            $table->string('logo')->default('empresassistema/logo.png');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_sistemas');
    }
};
