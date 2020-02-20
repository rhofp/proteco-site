<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Curso::class, function (Faker $faker) {
    $curso = $faker->word;
    $es_semestral = $faker->boolean;
    $es_intersemestral = $es_semestral ? false : true;
    return [
        'nombre' => $curso,
        'nivel' => $faker->randomElement(['básico','intermedio','avanzado']),
        'semestre' => $faker->randomElement(['2020-1','2020-2']),
        'activo' => $faker->boolean,
        'horas' => $faker->numberBetween(15,30),
        'ruta_temario' => $curso.'.pdf',
        'ruta_imagen' => $curso.'.png',
        'es_semestral' => $es_semestral,
        'es_intersemestral' => $es_intersemestral,
        'precio_estudiante_unam' => $faker->randomFloat(2,700,900),
        'precio_estudiante_ext' => $faker->randomFloat(2,900,1600),
        'precio_general' => $faker->randomFloat(2,1600,2000),
        'fecha_inicio' => $faker->date('Y-m-d'),
        'fecha_fin' => $faker->date('Y-m-d'),
    ];

});
