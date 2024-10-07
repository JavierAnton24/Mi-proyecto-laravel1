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
    Schema::create('registros', function (Blueprint $table) {
        $table->id();
        $table->foreignId('formulario_config_id')->constrained()->onDelete('cascade');
        $table->string('dni');
        $table->string('nombre');
        $table->string('apellidos');
        $table->string('correo')->unique(); // Aseguramos que no haya correos duplicados
        $table->dateTime('fecha_reserva'); // Almacena la fecha de la reserva
        $table->boolean('firmado')->default(false); // Si está firmado
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
