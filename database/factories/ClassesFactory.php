<?php

use Faker\Generator as Faker;

$factory->define(App\Classes::class, function (Faker $faker) {
    return [
        'school_id'     => $faker->numberBetween($min=1, $max=10),
        'class_name'    => $faker->century,
        'capacity'      => $faker->numberBetween($min=10, $max=20),
    ];
});
