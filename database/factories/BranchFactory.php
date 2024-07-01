<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    $branches = ['beginner', 'elementary', 'pre-intermediate', 'intermediate', 'upper-intermediate'];
    return [
        'name' => $faker->unique()->randomElement($branches),
    ];
});

