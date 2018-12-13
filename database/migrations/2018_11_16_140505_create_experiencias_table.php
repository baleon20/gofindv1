<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organizacion',100);
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->string('cargo',100);
            $table->string('descripcion',100);
            $table->string('adjunto',250);

            $table->integer('idegresados')->unsigned();

            $table->foreign('idegresados')->references('id')->on('egresados')->onDelete('cascade');

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
        Schema::dropIfExists('experiencias');
    }
}
