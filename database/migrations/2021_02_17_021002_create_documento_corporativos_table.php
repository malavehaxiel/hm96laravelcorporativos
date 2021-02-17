<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoCorporativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tw_documentos_corporativos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tw_corporativos_id');
            $table->unsignedInteger('tw_documentos_id');
            $table->string('S_ArchivoUrl', 255)->nullable();

            $table->foreign('tw_corporativos_id')->references('id')->on('tw_corporativos');
            $table->foreign('tw_documentos_id')->references('id')->on('tw_documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tw_documentos_corporativos');
    }
}
