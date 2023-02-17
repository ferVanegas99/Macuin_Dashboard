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
        Schema::create('chat', function (Blueprint $table) {
            $table->integer('id_chat')->autoIncrement();
 /*            $table->integer('id_ticket');
            $table->string('departamento',20);
            $table->string('remitente',50); */
            $table->foreign('id_ticket')->references('id_ticket')->on('tickets');
            $table->foreign('departamento')->references('id_departamento')->on('departamento');
            $table->foreign('remitente')->references('id_usuario')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat');
    }
};
