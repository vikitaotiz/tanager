<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->sentence(10),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
        'categorymenu_id' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => 1
    ];
});
