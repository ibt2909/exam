<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classroom;
use App\Models\Location;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {
    static $names = ['a1', 'a2', 'a3', 'a4', 'a5', 'b1', 'b2', 'b3', 'b4', 'b5'];
    return [
        'location_id' => Location::inRandomOrder()->first()->id,
        'name' => array_shift($names) ?: $faker->word,
    ];
});

