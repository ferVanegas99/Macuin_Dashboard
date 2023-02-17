<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_usuario', true);
            $table->string('username', 50);
            $table->string('tipo_user', 25);
            $table->text('direccion');
            $table->string('telefono', 15);
            $table->integer('id_departamento')->index('id_departamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
