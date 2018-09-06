<?php

class  PagesController
{
    public function index()
    {
        $tasks = App::get('database')->SelectAll('todo');

        require 'views/index.view.php';

    }

    public  function about()
    {
        require 'views/about.view.php';


    }

    public function contact()
    {
        $users = App::get('database')->SelectAll('users');

        require 'views/contact.view.php';

    }

    public function signup()
    {
        $table = 'users';

        $params = [

            'name' => $_POST['name'],
            'age'  => $_POST['age'],

        ];

        App::get('database')->insert($table, $params);
    }

    public  function culture()
    {

        require 'views/about-culture.view.php';

    }
}