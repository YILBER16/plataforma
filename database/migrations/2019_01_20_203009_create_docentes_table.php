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
            $table->string('tipo_documento', 20);
            $table->string('nom_docente', 150);
            $table->string('dir_docente', 120);
            $table->string('tel_docente', 15);
            $table->string('cor_docente', 60);
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
        Schema::dropIfExists('docentes');
    }
}
