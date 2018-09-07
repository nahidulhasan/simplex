<?php


return  [

    'database' => [

        'name' => 'simplex',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'port' => 3306,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]


];



//$pdo = new PDO('mysql:host=127.0.0.1;dbname=simplex', 'root', '');