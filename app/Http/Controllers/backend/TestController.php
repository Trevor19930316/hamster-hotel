<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Libraries\element\EInput;
use Libraries\helper\HelperSession;
use Libraries\helper\HelperValidator;
use Libraries\helper\HelpImageUploader;

class TestController extends Controller
{
    public function testPost(Request $request)
    {
        $EInput = new EInput();
    }
}
