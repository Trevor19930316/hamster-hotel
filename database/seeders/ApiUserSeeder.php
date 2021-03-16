<?php

namespace Database\Seeders;

use App\Models\RoleHierarchy;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class ApiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_users')->truncate();

        /* Create roles */

        /*  insert api users   */
        User::create([
            'name' => 'test',
            'account' => 'test',
            'password' => Hash::make('test'),
            'token' => Str::random(30),
        ]);
    }
}
