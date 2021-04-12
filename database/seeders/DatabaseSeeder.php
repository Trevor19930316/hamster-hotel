<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*
        $seeders = [
            'ArticleSeeder',
        ];
        $this->call($seeders);
        */

        $this->call([
            ApiUserSeeder::class,
            ArticleSeeder::class,
            HamsterSeeder::class,
            MenusTableSeeder::class,
            OwnerSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            SystemCodeSeeder::class,
        ]);

    }
}
