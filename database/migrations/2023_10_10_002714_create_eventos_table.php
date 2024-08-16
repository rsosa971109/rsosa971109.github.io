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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("title",255);
            $table->string("asignatura",255);
            $table->string("grupo",255);
            $table->string("grado",255);
            $table->string("docente",255);
            $table->time('horae', $precision = 0);
            $table->time('horas', $precision = 0);
            $table->text("descripcion");
            $table->dateTime("start");
            $table->dateTime("end");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
