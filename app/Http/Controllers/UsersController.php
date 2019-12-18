<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
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
        return response()->json(
            User::create([
                    'description' => $request->description,
                    'password' => md5($request->password)
                ]
        ), 201);
    }

    public function getForId(int $id){

        $user = User::find($id);
        if (is_null($user)){
            return response()->json('', 404);
        }

        return response()->json($user);
    }
}
