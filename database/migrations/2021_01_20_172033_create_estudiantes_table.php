<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigInteger('id_estudiante')->unsigned();
            $table->primary('id_estudiante');
            $table->bigInteger('id_acudiente')->unsigned();
            $table->bigInteger('id_grado')->unsigned();
            $table->bigInteger('id_padre')->unsigned();
            $table->string('nom_estudiante', 60);
            $table->string('dir_estudiante', 60);
            $table->string('tel_estudiante', 12);
            $table->string('cor_estudiante', 45);
            $table->date('fecha_nacimiento');
            $table->string('edad',15);
            $table->string('pais',15);
            $table->string('ciudad',15);
            $table->string('sexo',15);
            $table->binary('doc_foto');
            $table->binary('doc_documento');
            $table->binary('doc_paz_salvo');
            $table->binary('doc_boletin');
            $table->binary('doc_observador');
            $table->binary('doc_otros');                
            $table->timestamps();
            $table->foreign('id_acudiente')->references('id_acudiente')->on('acudientes');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->foreign('id_padre')->references('id_padre')->on('padres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
