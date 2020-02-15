<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('grupo_id');
            $table->string('turno');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('dias');
            $table->unsignedBigInteger('cupo_maximo');
            $table->unsignedBigInteger('num_inscritos');
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('lugar_id');
            $table->timestamps();

            $table->foreign('curso_id')
                ->references('curso_id')
                ->on('curso');
            $table->foreign('lugar_id')
                ->references('lugar_id')
                ->on('lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
