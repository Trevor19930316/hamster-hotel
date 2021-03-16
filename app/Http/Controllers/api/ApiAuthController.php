<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('login');
    }

    // api_user
    public function user()
    {
        return response()->json(auth()->user());
    }

    // login
    public function login()
    {
        $credentials = request(['account', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['status' => 1, 'message' => 'invalid credentials'], 401);
        }

        return response()->json(['status' => 0, 'token' => $token]);
    }

    // logout
    public function logout()
    {
        auth()->logout();
        return response()->json(['status' => 0]);
    }
}
