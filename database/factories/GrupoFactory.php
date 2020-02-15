<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Grupo::class, function (Faker $faker) {
    return [
        'turno' => $faker->randomElement(['matutino','vespertino']),
        'fecha_inicio' => $faker->date('Y-m-d'),
        'fecha_fin' => $faker->date('Y-m-d'),
        'hora_inicio' => $faker->time('H:i:s'),
        'hora_fin' => $faker->time('H:i:s'),
        'dias' => 'Lunes a Viernes',
        'cupo_maximo' => $faker->numberBetween(20,40),
        'num_inscritos' => $faker->numberBetween(0,20),
        'curso_id' => $faker->numberBetween(1,50),
        'lugar_id' => $faker->numberBetween(1,20)

    ];
});
