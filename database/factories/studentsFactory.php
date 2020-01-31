<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\students;
use Faker\Generator as Faker;

$factory->define(students::class, function (Faker $faker) {
    return [
         'name' => $faker->name,
         'address' => $faker->address,
         'contact' => $faker->phoneNumber,
    ];
});
