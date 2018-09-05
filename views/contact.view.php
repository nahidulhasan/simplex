<html>

<tittle>  </tittle>

<head> </head>

<body>

<?php require ('partials/head.php'); ?>

<?php require ('partials/nav.php'); ?>

<h1> Contact </h1>


<h1>Users List</h1>

<ul>

    <?php foreach($users as $user): ?>

        <li> <?= $user->name; ?> </li>


    <?php endforeach; ?>


</ul>


<h3>Submit your personal info:</h3>

<form method="POST" action="/signup">

    Name : <input name="name"> </input>

    Age : <input name="age"> </input>

    <button type="submit"> submit </button>

</form>




<body>

</html>