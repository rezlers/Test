<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Debt::class, function (Faker $faker) {
    return [
        'debt' => $faker->numberBetween(0, 100)
    ];
});
