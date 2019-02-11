<?php

use Faker\Generator as Faker;


$factory->define(App\Produit::class, function (Faker $faker) {
    return [

        
        'title' => 'Iste porro unde aut eum rem.',
        'desc' => "Debitis veniam voluptate aut debitis et aut rerum labore qui officia quae facere optio sit nulla hic sunt sapiente ratione quasi quibusdam voluptatibus debitis velit rerum nihil nisi at corrupti quae animi necessitatibus laboriosam sint consequatur sint blanditiis minima et voluptatem distinctio ut tempora delectus est qui ut nulla perspiciatis doloribus est accusamus cumque." ,    // array('porro', 'sed', 'magni')
        'content' => $faker->Sentence($nbWords = 200),
        'price' => $faker->randomNumber($nbDigits = 2, $strict = false) // 79907610

    ];
});
