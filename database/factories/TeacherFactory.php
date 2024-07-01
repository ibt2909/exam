<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    $teachers = ["Sapar", "Maysa", "Arslan", "Dowlet", "Aman", "Shemshat", "Rowshen", "Aynur", "Suleyman", "Mahri"];
    return [
        'first_name' => $faker->unique()->randomElement($teachers),
        'last_name' => $faker->lastName,
    ];
});

