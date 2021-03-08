<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    // show 登入頁
    public function show()
    {
        return view('backend.login');
    }

    // login 登入
    public function login()
    {

    }

    // 登出頁
    public function logout()
    {

    }
}
