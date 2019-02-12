<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
            // 'image'=>$faker->imageUrl(),
            // 'name'=>$faker->name,
            // 'description'=>$faker->sentence(),
    ];
});
