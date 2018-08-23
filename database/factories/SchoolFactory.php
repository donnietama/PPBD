<?php

use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name'      =>  $faker->company,
        'owner_id'  =>  $faker->numberBetween($min=1, $max=10),
        'city'      =>  $faker->city,
        'region'    =>  $faker->state,
        'address'   =>  $faker->address,
        'postal'    =>  $faker->postcode,
        'plan_id'   =>  $faker->numberBetween($min=1, $max=3),
        'email'     =>  $faker->unique()->freeEmail,
        'contact'   =>  $faker->unique()->e164PhoneNumber,
        'emergency'  =>  $faker->unique()->e164PhoneNumber,
        'capacity'  =>  $faker->numberBetween($min=10, $max=20),
        'image'     =>  'https://ppdb.dev/storage/svg/girl.svg',
        'created_at'    => \Carbon\Carbon::now(),
        'updated_at'    => \Carbon\Carbon::now(),
    ];
});
