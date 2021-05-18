<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directivos', function (Blueprint $table) {
            $table->bigInteger('id_directivo')->unsigned();
            $table->primary('id_directivo');
            $table->string('tipo_documento', 20);
            $table->string('nom_directivo', 150);
            $table->string('dir_directivo', 120);
            $table->string('tel_directivo', 15);
            $table->string('cor_directivo', 60);
            $table->string('nivel_academico', 45);
            $table->string('doc_documento',80);
            $table->string('hoja_de_vida',80);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directivos');
    }
}
