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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id_usuario')->autoIncrement();
            $table->string('username',50);
            $table->string('tipo_user',25);
            $table->text('direccion',100);
            $table->string('telefono',13);
            $table->string('departamento',20);
            $table->foreign('departamento')->references('id_departamento')->on('departamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
