<?php

use Faker\Generator as Faker;

$factory->define(App\NewStudent::class, function (Faker $faker) {
    $width = 800;
    $height = 600;
    return [
        'user_id'   => $faker->unique()->numberBetween($min = 1, $max = 10),
        'math'      => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 100),
        'science'   => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 100),
        'bahasa'    => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 100),
        'english'   => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 100),
        'skhun'     => $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
        'ijazah'    => $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
        'raport'    => $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
    ];
});
