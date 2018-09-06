<?php


$users = App::get('database')->SelectAll('users');

require 'views/contact.view.php';