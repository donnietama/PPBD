<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    $width = 800;
    $height = 600;
    return [
        'user_id'       => $faker->numberBetween($min = 1, $max = 10),
        'class_id'      => $faker->numberBetween($min = 1, $max = 10),
        'name'          => $faker->name,
        'birth'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'city'          => $faker->city,
        'province'      => $faker->region,
        'contact'       => $faker->phoneNumber,
        'emergency'      => $faker->phoneNumber,
        'emergenrel'    => 'Family',
        'avatar'        => 'https://ppdb.dev/storage/svg/girl.svg',
    ];
});
