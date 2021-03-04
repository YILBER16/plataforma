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
            $table->string('nom_estudiante', 120);
            $table->string('dir_estudiante', 120);
            $table->string('tel_estudiante', 15);
            $table->string('cor_estudiante', 60);
            $table->date('fecha_nacimiento');
            $table->date('fecha_expedicion');
            $table->integer('id_pais')->unsigned();
            $table->integer('id_departamento')->unsigned();
            $table->integer('id_ciudad')->unsigned();
            $table->string('sexo',15);    
            $table->Integer('estado');        
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pais')->references('id')->on('countries');
            $table->foreign('id_departamento')->references('id')->on('states');
            $table->foreign('id_ciudad')->references('id')->on('cities');

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
