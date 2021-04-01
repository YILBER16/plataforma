<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table->bigInteger('id_acudiente')->unsigned();
            $table->primary('id_acudiente');
            $table->string('tipo_documento', 20);
            $table->string('nom_acudiente', 120);
            $table->string('dir_acudiente', 120);
            $table->string('tel_acudiente', 15);
            $table->string('cor_acudiente', 65);
            $table->string('doc_documento');
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
        Schema::dropIfExists('acudientes');
    }
}
