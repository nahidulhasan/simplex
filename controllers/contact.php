<?php


$users = $app['database']->SelectAll('users');

require 'views/contact.view.php';