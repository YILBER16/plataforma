<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->bigInteger('id_padre')->unsigned();
            $table->primary('id_padre');
            $table->string('tipo_documento', 20);
            $table->string('nom_padre', 120);
            $table->string('parentesco',30);
            $table->string('ocu_padre',15);
            $table->string('tel_padre',15);
            $table->string('dir_padre',120);
            $table->string('doc_documento')->nullable();
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
        Schema::dropIfExists('padres');
    }
}
