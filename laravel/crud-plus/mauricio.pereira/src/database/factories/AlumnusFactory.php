<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumnus;
use Faker\Generator as Faker;

$factory->define(Alumnus::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'linkedin' => "https://www.linkedin.com/in/{$faker->userName}/"
    ];
});
