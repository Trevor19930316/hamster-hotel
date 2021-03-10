<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        Debugbar::info($request);

        $credentials = $request->only(['email', 'password']);

        $validateRules = [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];

        $validateMessages = [
            'required' => __('validation.required'),
            'email' => __('validation.email')
        ];

        $validateCustomAttributes = [
            'email' => '電子郵件',
            'password' => '密碼',
        ];

        $validator = Validator::make($credentials, $validateRules, $validateMessages, $validateCustomAttributes);

//        dump($validator->validate());
//        dump($validator->validateWithBag('post'));
        dump($validator->errors());
        dd($validator);

        $remember = !is_null($request->input('remember')) ? true : false;

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
