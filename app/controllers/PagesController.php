<?php

namespace App\Controllers;

use App\Core\App;

class  PagesController
{
    public function index()
    {
        $tasks = App::get('database')->SelectAll('todo');

        return view('index', ['tasks' => $tasks]);

    }

    public  function welcome()
    {

       return view('welcome');
    }

    public  function about()
    {

        return view('about');

    }

    public function contact()
    {
        $users = App::get('database')->SelectAll('users');

        return view('contact', ['users' => $users]);

    }

    public function signup()
    {
        $table = 'users';

        $params = [

            'name' => $_POST['name'],
            'age'  => $_POST['age'],

        ];

        App::get('database')->insert($table, $params);

        header('Location:/contact');
    }

    public  function culture()
    {

        return view('about-culture');

    }
}