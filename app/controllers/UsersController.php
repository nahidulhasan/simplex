<?php

namespace App\Controllers;

use App\Core\App;

class  UsersController
{
    public function index()
    {
       // $users = App::get('database')->SelectAll('users');

        return view('user', ['users' => $users]);

    }


}