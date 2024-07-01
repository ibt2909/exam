<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    $locations = ['uniwermag', 'mir 1 sahamca', 'anew'];
    return [
        'name' => $faker->unique()->randomElement($locations),
    ];
});


