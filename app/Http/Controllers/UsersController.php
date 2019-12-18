<?php

namespace App\Http\Controllers;

use App\User;

class UsersController
{
    public function index()
    {
        return User::all();
    }
}
