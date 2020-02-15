<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionAsistenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_asistente', function (Blueprint $table) {
            $table->bigIncrements('inscripcion_asistente_id');
            $table->unsignedBigInteger('asistente_id');
            $table->unsignedBigInteger('grupo_id');

            $table->foreign('asistente_id')
                ->references('asistente_id')
                ->on('asistente');
            $table->foreign('grupo_id')
                ->references('grupo_id')
                ->on('grupo');
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
        Schema::dropIfExists('inscripcion_asistente');
    }
}
