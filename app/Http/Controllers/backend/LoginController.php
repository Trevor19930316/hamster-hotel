<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\View\View;

class LoginController extends Controller
{
    // show 登入頁
    public function show()
    {
        return view('backend.login');
    }

    /*
    // login 登入
    public function login(UserLoginRequest $request)
    {
        $validated = $request->validated();

    }
    */

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        $remember = !is_null($request->input('remember')) ? true : false;

        $validateRules = [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];

        if (Auth::guard('web')->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->route('backend.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // 登出頁
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('backend.login.login');

    }
}
