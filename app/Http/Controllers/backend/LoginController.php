<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Libraries\Helper\HelperSession;
use Libraries\Helper\HelperValidator;

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

            // 設定 Session
            HelperSession::makeUserSession($user);

            return redirect()->route('backend.dashboard');
        }

        return redirect()->route('backend.login.logout');
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
