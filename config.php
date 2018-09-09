<?php


return  [

    'database' => [

        'name' => 'simplex',
        'username' => 'root',
        'password' => 'common404',
        'connection' => 'mysql:host=database',
        'port' => 3306,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]


];




       /* 'password' => 'common404',
        'connection' => 'mysql:host=database',*/