<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text($maxNbChars = 20) ,
        'description' => $faker->text($maxNbChars = 60),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
        'photo' => $faker->imageUrl($width = 300, $height = 200),
    ];
});
