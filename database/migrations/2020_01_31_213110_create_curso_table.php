<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->bigIncrements('curso_id');
            $table->string('nivel')->nullable();
            $table->string('nombre');
            $table->integer('horas');
            $table->string('semestre');
            $table->string('ruta_temario')->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->boolean('es_semestral');
            $table->boolean('es_intersemestral');
            $table->decimal('precio_estudiante_unam');
            $table->decimal('precio_estudiante_ext');
            $table->decimal('precio_general');
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
        Schema::dropIfExists('curso');
    }
}
