<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
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
        $Role = new Role();
        $sqlBuilder = $Role->orderBy('id', 'asc');
        $roles = $sqlBuilder->paginate(config('backend.pagination'));

        $data = [
            'roles' => $roles
        ];

        return view('backend.settings.roles.index', $data);
    }

    public function show($roles_id)
    {
        $Role = new Role();
        $role = $Role->where('id', '=', $roles_id)->first();


    }
}
