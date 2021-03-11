<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Libraries\Adam\AdamValidator;

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
        // app('debugbar')->warning('Watch out..');

        $credentials = $request->only([
            'email',
            'password'
        ]);

        $validateRules = [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];

        $AdamValidator = new AdamValidator('users');
        $validateStatus = $AdamValidator->setValidateData($credentials)
            ->setValidateRules($validateRules)
            ->validate();

        if (!$validateStatus) {

            dd($AdamValidator->getErrorMessages());
        }

        dd($validateStatus);


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
