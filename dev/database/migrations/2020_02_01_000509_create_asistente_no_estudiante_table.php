<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenteNoEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente_no_estudiante', function (Blueprint $table) {
            $table->bigIncrements('asistente_id');
            $table->string('lugar_empleo')->nullable();
            $table->string('rfc');
            $table->string('empleo')->nullable();
            $table->string('nivel_estudios');
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
        Schema::dropIfExists('asistente_no_estudiante');
    }
}
