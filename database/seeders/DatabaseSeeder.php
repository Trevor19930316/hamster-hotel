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
            ArticleSeeder::class,
            OwnerSeeder::class,
            HamsterSeeder::class,
            ApiUserSeeder::class,
            MenusTableSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
        ]);

    }
}
