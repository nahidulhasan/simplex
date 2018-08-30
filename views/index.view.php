<html>

<tittle>  </tittle>

<head> </head>

<body>

   <h3>Menu</h3>

   <li> <a href="views/about.view.php">about us</a> </li>
   <li> <a href="views/contact.view.php">contact</a> </li>
   <li> <a href="views/about-culture.view.php">about culture</a> </li>


   <h1>My Task List</h1>

    <ul>

    	<?php foreach($tasks as $task): ?>

    	 <li>

    	    <?php if ($task->completed): ?>

    	    <strike> <?= $task->description; ?> </strike>

    	    <?php else: ?>

    	    <?= $task->description; ?>

    	    <?php endif; ?>


    	 </li>


    	<?php endforeach; ?>


    </ul>

<body>

</html>