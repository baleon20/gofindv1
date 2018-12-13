<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechapostulacion');


            $table->integer('idvacantes')->unsigned();
            $table->integer('idegresados')->unsigned();


             $table->foreign('idvacantes')->references('id')->on('vacantes')->onDelete('cascade');
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
        Schema::dropIfExists('postulacions');
    }
}
