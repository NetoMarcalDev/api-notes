<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->classe = User::class;
    }

    public function create(Request $request)
    {
        return response()->json(
            $this->classe::create(
                [
                    'description' => $request->description,
                    'password' => Hash::make($request->password)
                ]
            ), 201);
    }
}
