<html>

<tittle>  </tittle>

<head> </head>

<body>

<?php require ('partials/head.php'); ?>

<?php require ('partials/nav.php'); ?>


<h1>Users List</h1>

<ul>


    <?php foreach($users as $user): ?>

        <li> <?= $user->name; ?> </li>


    <?php endforeach; ?>


</ul>


<body>

</html>