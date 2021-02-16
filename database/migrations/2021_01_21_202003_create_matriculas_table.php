<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('id_matricula')->unsigned();
            $table->bigInteger('id_estudiante')->unsigned();
            $table->bigInteger('id_grado')->unsigned();
            $table->bigInteger('id_anio_lectivo')->unsigned();
            $table->bigInteger('id_acudiente')->unsigned();
            $table->bigInteger('id_padre')->unsigned();
            $table->double('valor_matricula', 8, 2);
            $table->string('doc_foto');
            $table->string('doc_documento');
            $table->string('doc_paz_salvo');
            $table->string('doc_boletin');
            $table->string('doc_otros')->nullable();   
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->foreign('id_anio_lectivo')->references('id_anio_lectivo')->on('anio_lectivo');
            $table->foreign('id_acudiente')->references('id_acudiente')->on('acudientes');
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
        Schema::dropIfExists('matriculas');
    }
}
