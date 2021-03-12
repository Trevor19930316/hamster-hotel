<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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

            $request->session()->regenerate();

            // 設定 Session
            $dealerSessions['id'] = $dealer->id;
            $dealerSessions['dealers_levels_id'] = $dealer->dealers_levels_id;
            $dealerSessions['dealers_levels_name'] = $dealersLevels[$dealer->dealers_levels_id];
            $dealerSessions['account'] = $dealer->account;
            $dealerSessions['name'] = $dealer->name;
            $dealerSessions['is_useful'] = $dealer->is_useful;
            $dealerSessions['language'] = $dealer->language;
            $dealerSessions['godlike'] = $dealer->godlike;
            $dealerSessions['agent_id'] = session('agent_id');
            $dealerSessions['agent_account'] = session('agent_account');
            $dealerSessions['agent_expired_at'] = session('agent_expired_at');
            session($dealerSessions);

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
