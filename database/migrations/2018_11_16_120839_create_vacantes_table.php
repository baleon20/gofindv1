<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->string('descripcion',300);
            $table->string('requisito',300);
            $table->string('candidatos',30);
            $table->string('rangosalarial',200);

            $table->integer('idareas')->unsigned();
            $table->integer('idempresas')->unsigned();
            $table->integer('idciudad')->unsigned();
            
           

            $table->foreign('idareas')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('idempresas')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('idciudad')->references('id')->on('ciudads')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('vacantes');
    }
}
