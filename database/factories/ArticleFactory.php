<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        // 'titre' => $faker->word(),
        // 'texte' => $faker->text($maxNbChars = 100) ,
        // 'image' => $faker->imageUrl(),    
    ];
});
