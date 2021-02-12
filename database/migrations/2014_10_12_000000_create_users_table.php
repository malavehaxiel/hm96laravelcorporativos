<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 45);
            $table->string('email', 45)->unique();
            $table->string('S_Nombre', 45)->nullable();
            $table->string('S_Apellidos', 45)->nullable();
            $table->string('S_FotoPerfilUrl', 255)->nullable();
            $table->boolean('S_Activo')->default(true);
            $table->string('password', 100);
            $table->string('verification_token', 191)->nullable();
            $table->string('verified', 191)->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_usuarios');
    }
}
