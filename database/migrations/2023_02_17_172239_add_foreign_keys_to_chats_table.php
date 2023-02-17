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
        Schema::table('chats', function (Blueprint $table) {
            $table->foreign(['id_ticket'], 'chats_ibfk_1')->references(['id_ticket'])->on('tickets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_usuario'], 'chats_ibfk_2')->references(['id_usuario'])->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_departamento'], 'chats_ibfk_3')->references(['id_departamento'])->on('departamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->dropForeign('chats_ibfk_1');
            $table->dropForeign('chats_ibfk_2');
            $table->dropForeign('chats_ibfk_3');
        });
    }
};
