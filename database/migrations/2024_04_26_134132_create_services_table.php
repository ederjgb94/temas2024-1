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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->string('destino');
            $table->decimal('distancia');
            $table->decimal('total_precio');
            $table->decimal('costo_gaslina');
            $table->decimal('costo_casetas');
            $table->decimal('honorarios_chofer');
            $table->decimal('peso_flete');
            $table->string('tipo_mercancia');
            $table->foreignId('trailer_id')->constrained();
            $table->foreignId('chofer_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
