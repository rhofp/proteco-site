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
            $table->string('nombre',15);
            $table->string('nombre_imagen')->nullable();
            $table->string('nombre_temario')->nullable();
            $table->char('nivel',1)->nullable()
                ->comment('Los niveles son B:básico, I:intermedio, A:avanzado');
            $table->char('tipo',1)
                ->comment('Los tipos son S:semestral, I:intersemestral');
            $table->boolean('activo')->default(true);
            $table->integer('num_horas');
            $table->decimal('precio_estudiante_unam');
            $table->decimal('precio_estudiante_ext');
            $table->decimal('precio_general');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedBigInteger('semestre_id');
            $table->timestamps();

            $table->foreign('semestre_id')
                ->references('semestre_id')
                ->on('semestre');

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
