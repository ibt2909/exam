<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lesson;
use App\Models\Classroom;
use App\Models\Branch;
use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'classroom_id' => Classroom::inRandomOrder()->first()->id,
        'branch_id' => Branch::inRandomOrder()->first()->id,
        'teacher_id' => Teacher::inRandomOrder()->first()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
