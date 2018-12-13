<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombre',60);
            $table->string('apellido',60);
            $table->string('telefono',20);
            $table->string('direccion',300);
            $table->string('email',300);
            $table->date('fechanacimiento');
            $table->string('sexo',1);
            $table->string('estrato',2);

            $table->integer('idtipo_documentos')->unsigned();
           
            $table->integer('idusuarios')->unsigned();

            $table->foreign('idtipo_documentos')->references('id')->on('tipo_documentos')->onDelete('cascade');
           
            $table->foreign('idusuarios')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('egresados');
    }
}
