<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasOdontologicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas_odontologicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha');
            $table->integer('hora');
            $table->bigInteger('procedimiento_id')->unsigned();
            $table->foreign('procedimiento_id')->references('id')->on('procedimientos');
            $table->string('paciente_id');
            $table->foreign('paciente_id')->references('identificacion')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas_odontologicas');
    }
}
