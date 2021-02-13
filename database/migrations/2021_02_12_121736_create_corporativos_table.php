<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_corporativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('S_NombreCorto', 45);
            $table->string('S_NombreCompleto', 75);
            $table->string('S_LogoUrl', 255)->nullable();
            $table->string('S_DBName', 45);
            $table->string('S_DBUsuario', 45);
            $table->string('S_DBPassword', 150);
            $table->string('S_SystemUrl', 255);
            $table->boolean('S_Activo')->default(true);
            $table->timestamp('D_FechaIncorporacion');
            $table->unsignedInteger('tw_usuarios_id');
            $table->timestamps();
            $table->softdeletes();

            $table->foreign('tw_usuarios_id')->references('id')->on('tw_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_corporativos');
    }
}
