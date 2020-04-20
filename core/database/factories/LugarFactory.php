<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Lugar::class, function (Faker $faker) {
    $edificios = range('A','Z');
    $edificio = $faker->randomElement($edificios);
    return [
        'edificio' => $edificio,
        'salon' => $faker->randomDigit.$faker->randomDigit.$faker->randomDigit
    ];
});
