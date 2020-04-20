<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Semestre;
use Faker\Generator as Faker;

$factory->define(Semestre::class, function (Faker $faker) {
    return [
        'annio' => $faker->numberBetween(2015,2030),
        'semestre' => $faker->randomElement([1,2])
    ];
});
