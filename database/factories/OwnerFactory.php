<?php

use Faker\Generator as Faker;

$factory->define(App\Owner::class, function (Faker $faker) {
    $width = 800;
    $height = 640;
    return [
        'name'          => $faker->name,
        'birth'         => $faker->date,
        'address'       => $faker->address,
        'city'          => $faker->city,
        'province'      => $faker->state,
        'contact'       => $faker->unique()->e164PhoneNumber,
        'emergenc'      => $faker->unique()->e164PhoneNumber,
        'avatar'        => 'https://ppdb.dev/storage/svg/girl.svg',
        'email'         => $faker->unique()->freeEmail,
        'password'      => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'created_at'    => \Carbon\Carbon::now(),
        'updated_at'    => \Carbon\Carbon::now(),
    ];
});