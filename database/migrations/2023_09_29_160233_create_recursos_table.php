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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresasistema_id')->constrained('empresa_sistemas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->string('nome');
            $table->decimal('custohora', 10, 2);
            $table->integer('equipamentovida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
