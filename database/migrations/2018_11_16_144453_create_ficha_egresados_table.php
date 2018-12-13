<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_egresados', function (Blueprint $table) {
            $table->increments('id');
             $table->date('fechaegresado');


            $table->integer('idegresados')->unsigned();
            $table->integer('idfichas')->unsigned();


            $table->foreign('idegresados')->references('id')->on('egresados')->onDelete('cascade');
            $table->foreign('idfichas')->references('id')->on('fichas')->onDelete('cascade');
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
        Schema::dropIfExists('ficha_egresados');
    }
}
