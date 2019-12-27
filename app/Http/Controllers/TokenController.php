<?php

namespace App\Http\Controllers;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function generateToken(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('description', $request->description)->first();

        if (is_null($user) ||
            !Hash::check($request->password, $user->password)){
            return response()->json('Usuário ou senha inválidos.', 401);
        }

        $token = JWT::encode(
            ['password' => $request->password],
            env('JWT_KEY'));

        return [
            'access_token' => $token
        ];
    }
}
