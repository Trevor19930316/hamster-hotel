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
        $adminRole = Role::create(['name' => 'admin']);
        RoleHierarchy::create([
            'role_id' => $adminRole->id,
            'hierarchy' => 1,
        ]);
        $userRole = Role::create(['name' => 'user']);
        RoleHierarchy::create([
            'role_id' => $userRole->id,
            'hierarchy' => 2,
        ]);
        $guestRole = Role::create(['name' => 'guest']);
        RoleHierarchy::create([
            'role_id' => $guestRole->id,
            'hierarchy' => 3,
        ]);

        /*  insert users   */
        $user = User::create([
            'name' => 'Trevor',
            'email' => 'trevor19930316@gmail.com',
            'password' => Hash::make('111111'),
//            'password' => bcrypt('111111'),
            'menu_roles' => 'user,admin'
        ]);
        $user->assignRole('admin');
        $user->assignRole('user');
        $user = User::create([
            'name' => 'Tracy',
            'email' => 'lai831009@gmail.com',
            'password' => Hash::make('123456'),
            'menu_roles' => 'user,admin'
        ]);
        $user->assignRole('admin');
        $user->assignRole('user');
        $user = User::create([
            'name' => 'Testing',
            'email' => 'polo22662@gmail.com',
            'password' => Hash::make('222222'),
            'menu_roles' => 'user'
        ]);
        $user->assignRole('user');
    }
}
