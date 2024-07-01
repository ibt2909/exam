<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->date(),
        'gender' => $faker->randomElement(['male', 'female']),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

