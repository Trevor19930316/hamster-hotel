<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        /*  insert users   */
        $user = User::create([
            'name' => '超級管理員',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'menuroles' => 'Super-Admin'
        ]);
        $user->assignRole('Super-Admin');

        $user = User::create([
            'name' => 'Trevor',
            'email' => 'trevor19930316@gmail.com',
            'password' => Hash::make('111111'),
//            'password' => bcrypt('111111'),
            'menuroles' => 'Super-Admin'
        ]);
        $user->assignRole('Super-Admin');

        $user = User::create([
            'name' => 'Tracy',
            'email' => 'lai831009@gmail.com',
            'password' => Hash::make('123456'),
            'menuroles' => 'Admin,Viewer'
        ]);
        $user->assignRole('Admin');
        $user->assignRole('Viewer');

        $user = User::create([
            'name' => '測試帳號',
            'email' => 'test@gmail.com',
            'password' => Hash::make('111111'),
            'menuroles' => 'Viewer'
        ]);
        $user->assignRole('Viewer');
    }
}
