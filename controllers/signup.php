<?php


  $table = 'users';

  $params = [

      'name' => $_POST['name'],
      'age'  => $_POST['age'],

  ];

  $app['database']->insert($table, $params);



 echo "Your name is :"." ".$_POST['name'];

 echo "</br>";

 echo "Your age is :"." ".$_POST['age'];