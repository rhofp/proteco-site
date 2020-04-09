<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenteEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente_estudiante', function (Blueprint $table) {
            $table->bigIncrements('asistente_id');
            $table->string('num_cuenta');
            $table->string('carrera')->nullable();
            $table->string('facultad_plantel');
            $table->string('campus')->nullable();
            $table->string('institucion');
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
        Schema::dropIfExists('asistente_estudiante');
    }
}
