<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:users.view', ['only' => ['index']]);
        $this->middleware('permission:users-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:users-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $users = User::orderBy('id', 'asc')->get();

        $data = [
            'users' => $users
        ];

        return view('backend.settings.users.index', $data);
    }
}
