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

    // skills and tools
    'skills' => [
        'User experience (UX)',
        'User interview',
        'Wireframing / Prototyping',
        'Front-End Development',
        'User Interface (UI)',
        'Speaker / Writer / Teacher'
    ],
    'tools' => [
        'Figma, Framer',
        'Sketch, Invision',
        'HTML5, CSS3, Javascript',
        'PHP, Wordpress, MySQL',
        'Git, SVN',
        'Sublime Text, VSCode'
    ],


    // collections
    'collections' => [
        "about" => [
            'path' => 'about',
        ],
        "work" => [
            'path' => 'work',
            'sort' => 'end_date'
        ],
        "talks" => [
            'path' => 'talks',
            'sort' => 'date'
        ]
    ],
];
