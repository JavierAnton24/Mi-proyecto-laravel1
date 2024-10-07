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
    Schema::create('campos_formulario', function (Blueprint $table) {
        $table->id();
        $table->foreignId('formulario_config_id')->constrained()->onDelete('cascade'); // Llave foránea
        $table->string('tipo'); // Tipo de campo: texto, selector, checkbox
        $table->string('etiqueta'); // La etiqueta que se muestra al usuario
        $table->boolean('es_dinamico')->default(false); // Si es un campo dinámico (Sí/No)
        $table->integer('orden'); // El orden del campo
        $table->boolean('requerido')->default(false); // Si es obligatorio
        $table->text('texto_legal')->nullable(); // Texto legal asociado, si aplica
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campos_formulario');
    }
};
