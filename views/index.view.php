<html>

<tittle>  </tittle>

<head> </head>

<body>

   <h3>Menu</h3>

   <li> <a href="controllers/about.php">about us</a> </li>
   <li> <a href="controllers/contact.php">contact</a> </li>
   <li> <a href="controllers/about-culture.php">about culture</a> </li>


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