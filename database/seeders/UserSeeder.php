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
        User::create([
            'name' => 'Trevor',
            'email' => 'trevor19930316@gmail.com',
            'password' => Hash::make('111111'),
        ]);
        User::create([
            'name' => 'Testing',
            'email' => 'polo22662@gmail.com',
            'password' => Hash::make('222222'),
        ]);
    }
}
