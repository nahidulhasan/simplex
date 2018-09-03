<html>

<tittle>  </tittle>

<head> </head>

<body>

    <?php require ('partials/nav.php'); ?>

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