<?php

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Curso 1
        $curso = new Curso;
        $curso->nombre = 'Android';
        $curso->nombre_imagen = 'android.png';
        $curso->nombre_temario = 'androidbasico.pdf';
        $curso->nivel = 'B';
        $curso->tipo = 'S';
        $curso->num_horas = 20;
        $curso->precio_estudiante_unam = 500.00;
        $curso->precio_estudiante_ext = 700.00;
        $curso->precio_general = 900.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'M',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Lunes a Viernes',
            'cupo_maximo' => 30,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

        // Curso 2
        $curso = new Curso;
        $curso->nombre = 'Arduino';
        $curso->nombre_imagen = 'arduino.png';
        $curso->nombre_temario = 'arduinobasico.pdf';
        $curso->nivel = 'B';
        $curso->tipo = 'I';
        $curso->num_horas = 25;
        $curso->precio_estudiante_unam = 600.00;
        $curso->precio_estudiante_ext = 700.00;
        $curso->precio_general = 900.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'V',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Lunes a Viernes',
            'cupo_maximo' => 40,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

        // Curso 3
        $curso = new Curso;
        $curso->nombre = 'Mantenimiento de PCs';
        $curso->nombre_imagen = 'mantenimiento.png';
        $curso->nombre_temario = 'mantenimiento.pdf';
        $curso->nivel = 'I';
        $curso->tipo = 'S';
        $curso->num_horas = 15;
        $curso->precio_estudiante_unam = 600.00;
        $curso->precio_estudiante_ext = 800.00;
        $curso->precio_general = 1500.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'V',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Lunes a Viernes',
            'cupo_maximo' => 20,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

        // Curso 4
        $curso = new Curso;
        $curso->nombre = 'Linux';
        $curso->nombre_imagen = 'linux.png';
        $curso->nombre_temario = 'linuxbasico.pdf';
        $curso->nivel = 'B';
        $curso->tipo = 'S';
        $curso->num_horas = 20;
        $curso->precio_estudiante_unam = 800.00;
        $curso->precio_estudiante_ext = 900.00;
        $curso->precio_general = 900.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'M',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Sabados',
            'cupo_maximo' => 50,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

        // Curso 5
        $curso = new Curso;
        $curso->nombre = 'Linux';
        $curso->nombre_imagen = 'linux.png';
        $curso->nombre_temario = 'linuxintermedio.pdf';
        $curso->nivel = 'I';
        $curso->tipo = 'S';
        $curso->num_horas = 25;
        $curso->precio_estudiante_unam = 600.00;
        $curso->precio_estudiante_ext = 700.00;
        $curso->precio_general = 900.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'V',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Lunes a Viernes',
            'cupo_maximo' => 40,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

        // Curso 6
        $curso = new Curso;
        $curso->nombre = 'Administración de servidores Linux';
        $curso->nombre_imagen = 'linuxadmin.png';
        $curso->nombre_temario = 'linuxavanzado.pdf';
        $curso->nivel = 'A';
        $curso->tipo = 'S';
        $curso->num_horas = 15;
        $curso->precio_estudiante_unam = 600.00;
        $curso->precio_estudiante_ext = 800.00;
        $curso->precio_general = 1500.00;
        $curso->fecha_inicio = $faker->date('Y-m-d');
        $curso->fecha_fin = $faker->date('Y-m-d');
        $curso->semestre_id = $faker->numberBetween(1,10);
        $curso->save();
        $curso->grupos()->create([
            'turno' => 'V',
            'hora_inicio' => $faker->time('H:i'),
            'hora_fin' => $faker->time('H:i'),
            'dias' => 'Lunes a Viernes',
            'cupo_maximo' => 40,
            'lugar_id' => $faker->numberBetween(1,10)
        ]);

    }
}
