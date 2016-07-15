<?php

return [
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'dbname' => 'test1',
            'login' => 'root',
            'password' => ''
        ]

    ],
    'mail'=> [
        'default' => [
            'setting' => [
                'host' => 'smtp.gmail.com',
                'port' => '465',
                'security' => 'ssl'
            ],
            'authorization' => [
                'login' => '#',
                'password' => '#'
            ]
        ],
        'admin' => [
            'senior' => '#'
        ]

    ]

];