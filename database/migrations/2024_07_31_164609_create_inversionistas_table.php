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
        Schema::create('inversionistas', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('lastname');
            $table->date('Nacimiento');
            $table->integer('telefono');
            $table->string('contraseña');
            $table->string('correo');
            $table->string('ubicacion');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inversionistas');
    }
};
