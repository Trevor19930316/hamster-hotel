<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Model::unguard() and Model::reguard() 請參考下方 stack overflow
         * https://stackoverflow.com/questions/32795443/what-does-modelunguard-do-in-the-database-seeder-file-from-laravel-5
         */
        DB::table('articles')->truncate();
        Article::unguard();
        Article::factory(3)->create();
        Article::reguard();
    }
}
