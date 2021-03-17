<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Libraries\helper\HelperSession;
use Libraries\helper\HelperValidator;
use Libraries\helper\HelpImageUploader;

class TestController extends Controller
{
    public function testPost(Request $request)
    {
        dump($request->file('fileName'));
//        dump($request->file('fileNames'));

        HelpImageUploader::uploadFileAtTable($request->file('fileName'), 'users', 'name', User::find(1));

        dd($request);
    }
}
