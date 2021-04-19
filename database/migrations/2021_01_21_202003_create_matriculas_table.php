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
            $table->bigInteger('id_madre')->unsigned();
            $table->bigInteger('valor_matricula');
            $table->bigInteger('descuento_mensualidad');
            $table->bigInteger('sistema');
            $table->bigInteger('seguro_estudiantil')->nullable();
            $table->bigInteger('saldo_favor');
            $table->string('doc_foto');
            $table->string('doc_documento');
            $table->string('doc_paz_salvo');
            $table->string('doc_boletin');
            $table->string('doc_otros')->nullable();  
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->foreign('id_anio_lectivo')->references('id_anio_lectivo')->on('anio_lectivo');
            $table->foreign('id_acudiente')->references('id_acudiente')->on('acudientes');
            $table->foreign('id_padre')->references('id_padre')->on('padres');
            $table->foreign('id_madre')->references('id_padre')->on('padres');

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
