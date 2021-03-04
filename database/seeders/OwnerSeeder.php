<?php

namespace Database\Seeders;

use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        Owner::factory()
            ->count(5)
            ->has(Hamster::factory()->count(2))
            ->create();
    }
}
