<?php

namespace Database\Seeders;

use App\Models\ApiUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        ApiUser::create([
            'name' => 'test',
            'account' => 'test',
            'password' => Hash::make('test'),
            'token' => Str::random(30),
        ]);
    }
}
