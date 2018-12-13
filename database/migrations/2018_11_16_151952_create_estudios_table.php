<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',60);
            $table->string('institucion',300);
            $table->string('duracion',100);
            $table->date('fecha');

            $table->integer('idnivel_estudios')->unsigned();
            $table->integer('idegresados')->unsigned();

            $table->foreign('idnivel_estudios')->references('id')->on('nivel_estudios')->onDelete('cascade');
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
        Schema::dropIfExists('estudios');
    }
}
