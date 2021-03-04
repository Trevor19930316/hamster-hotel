<?php

namespace Database\Seeders;

use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class HamsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hamster::factory()
            ->count(2)
            ->for(Owner::factory())
//            ->for(Owner::factory()->state([
//                'name' => 'Trevor Big Bird',
//            ]))
//            ->forOwner()
            ->create();
    }
}
