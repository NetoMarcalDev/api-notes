<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->password = md5($request->password);

        return response()->json(
            User::create($request->all()), 201
        );
    }
}
