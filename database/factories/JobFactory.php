<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'name_en' => $faker->sentence(5),
        'name_fr' => $faker->sentence(6),
        'name_nl' => $faker->sentence(7),
        'description_en' => $faker->paragraphs(rand('3','5'),true),
        'description_fr' => $faker->paragraphs(rand('3','5'),true),
        'description_nl' => $faker->paragraphs(rand('3','5'),true),
        'skills_en' => $faker->sentences(rand('10','15'),true),
        'skills_fr' => $faker->sentences(rand('10','15'),true),
        'skills_nl' => $faker->sentences(rand('10','15'),true),
        'location_en' => $faker->city,
        'location_fr' => $faker->city,
        'location_nl' => $faker->city,
    ];
});
