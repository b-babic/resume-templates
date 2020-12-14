<?php

$faker = Faker\Factory::create();

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'author' => $faker->name,
    'jobTitle' => $faker->jobTitle,
    'email' => $faker->email,
    'telephone' => $faker->phoneNumber,
    'githubUrl' => $faker->url,
    'githubHandle' => $faker->word,
    'linkedinUrl' => $faker->url,
    'linkedinHandle' => $faker->word,
    'collections' => [
        "about" => [
            'path' => 'about',
        ]
    ],
];
