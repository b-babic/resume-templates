<?php

$dummy_data = Faker\Factory::create();

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'author' => $dummy_data->name,
    'jobTitle' => $dummy_data->jobTitle,
    'email' => $dummy_data->email,
    'telephone' => $dummy_data->phoneNumber,
    'githubUrl' => $dummy_data->url,
    'githubHandle' => $dummy_data->word,
    'linkedinUrl' => $dummy_data->url,
    'linkedinHandle' => $dummy_data->word,

    // collections
    'collections' => [
        "about" => [
            'path' => 'about',
        ],
        "work" => [
            'path' => 'work',
            'sort' => 'end_date'
        ]
    ],
];
