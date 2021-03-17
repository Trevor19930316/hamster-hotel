<?php

namespace Database\Seeders;

use App\Models\RoleHierarchy;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        /* Create roles */
        $AdminRole = Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $AdminRole->id,
            'hierarchy' => 1,
        ]);
        $ViewerRole = Role::create(['name' => 'Viewer', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $ViewerRole->id,
            'hierarchy' => 2,
        ]);
        $PublicRole = Role::create(['name' => 'Public', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $PublicRole->id,
            'hierarchy' => 3,
        ]);

        /*  insert users   */
        $user = User::create([
            'name' => 'Trevor',
            'email' => 'trevor19930316@gmail.com',
            'password' => Hash::make('111111'),
//            'password' => bcrypt('111111'),
            'menu_roles' => 'Admin,Viewer'
        ]);
        $user->assignRole('Admin');
        $user->assignRole('Viewer');
        $user = User::create([
            'name' => 'Tracy',
            'email' => 'lai831009@gmail.com',
            'password' => Hash::make('123456'),
            'menu_roles' => 'Admin,Viewer'
        ]);
        $user->assignRole('Admin');
        $user->assignRole('Viewer');
        $user = User::create([
            'name' => 'Testing',
            'email' => 'polo22662@gmail.com',
            'password' => Hash::make('222222'),
            'menu_roles' => 'Viewer'
        ]);
        $user->assignRole('Viewer');
    }
}
