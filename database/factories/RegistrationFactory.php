<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Registration;
use App\Models\Lesson;
use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Registration::class, function (Faker $faker) {
    return [
        'lesson_id' => Lesson::inRandomOrder()->first()->id,
        'student_id' => Student::inRandomOrder()->first()->id,
        'price' => $faker->randomFloat(2, 100, 500),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

