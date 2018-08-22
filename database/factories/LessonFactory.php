<?php

use Faker\Generator as Faker;

$factory->define(App\Lesson::class, function (Faker $faker) {
    return [
        'name'          => $faker->jobTitle,
        'teacher_id'    =>  $faker->numberBetween($min=1, $max=10),
    ];
});
