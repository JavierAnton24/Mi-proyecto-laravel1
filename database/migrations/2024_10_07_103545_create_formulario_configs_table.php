<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('formulario_configs', function (Blueprint $table) {
        $table->id();
        $table->string('nombre'); // Nombre del formulario o experiencia
        $table->string('logo_empresa')->nullable(); // Logo de la empresa
        $table->string('imagen_experiencia')->nullable(); // Imagen de la experiencia
        $table->enum('tema', ['claro', 'oscuro'])->default('claro'); // Tema claro u oscuro
        $table->timestamps(); // Campos de created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario_configs');
    }
};
