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




       // For docker connection

       /* 'password' => 'common404',
        'connection' => 'mysql:host=database',*/


       // For local connection

       //$pdo = new PDO('mysql:host=127.0.0.1;dbname=simplex', 'root', '');

