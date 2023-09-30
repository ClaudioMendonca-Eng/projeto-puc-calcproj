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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_sistemas_id')->constrained('empresa_sistemas')->onDelete('cascade')->onUpdate('cascade')->default(1);
            $table->string('empresa');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('cep');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefone');
            $table->string('responsavel');
            $table->string('logo')->default('clientes/cliente.png');
            $table->boolean('ativo')->nullable()->default(true);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
