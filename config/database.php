<?php

return  [
    'default' => 'mongodb',

    'connections' => [

        'mongodb' => array(
            'driver'   => 'mongodb',
            'host'     => env('MONGODB_HOST', 'localhost'),
            'port'     => env('MONGODB_PORT', 27017),
            'username' => env('MONGODB_USERNAME', ''),
            'password' => env('MONGODB_PASSWORD', ''),
            'database' => env('MONGODB_DATABASE', ''),
            'options' => array(
                'database' => env('MONGODB_DATABASE', 'merqueo') //Sets the auth DB
            )
        ),

    ],
];
