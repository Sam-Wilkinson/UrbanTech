<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name_en' => $faker->word,
        'name_fr' =>$faker->colorName,
        'name_nl' =>$faker->fileExtension,
    ];
});
