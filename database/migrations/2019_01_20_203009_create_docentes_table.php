<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigInteger('id_docente')->unsigned();
            $table->primary('id_docente');
            $table->string('cargo', 20);
            $table->string('nom_docente', 60);
            $table->string('tel_docente', 12);
            $table->string('cor_docente', 12);
            $table->string('nivel_academico', 45);
            $table->binary('doc_documento');
            $table->binary('hoja_de_vida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
