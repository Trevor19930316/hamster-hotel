<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Libraries\helper\HelperSession;
use Libraries\helper\HelperValidator;

class LoginController extends Controller
{
    // show 登入頁
    public function show()
    {
        return view('backend.login');
    }

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

        $HelperValidator = new HelperValidator('users');
        $validateStatus = $HelperValidator->setValidateData($credentials)
            ->setValidateRules($validateRules)
            ->validate();

        if (!$validateStatus) {
            return redirect()->back()->withErrors($HelperValidator->getErrorMessages());
        }

        $remember = !is_null($request->input('remember')) ? true : false;

        if (Auth::guard('web')->attempt($credentials, $remember)) {

            $user = Auth::guard('web')->user();

            $request->session()->regenerate();

            // 設定 User Session
            HelperSession::makeUserSession($user);

            return redirect()->route('backend.dashboard');
        }

        return redirect()->back()->withErrors(__('template/login.account_or_password_invalid'));
    }

    // 登出頁
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // 清空 User session
        HelperSession::clearUserSession();

        return redirect()->route('backend.login.login');
    }
}
