<?php

return [
    'database' => [
        'local' => [
            'host' => 'localhost',
            'database' => 'mytodo',
            'user' => 'root',
            'password' => '',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ],
        'zone'=> [
            'host' => 'd83309.mysql.zonevs.eu',
            'database' => 'd83309_mytodo',
            'user' => 'd83309sa327405',
            'password' => 'ametikool2021',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ]
];

// if ( $env == 'local') {

//     $host = 'localhost';
//     $database = 'mytodo';
//     $user = 'root';
//     $password = '';
// }

// return [
//     'database' => [
//         'name' =>
// ]