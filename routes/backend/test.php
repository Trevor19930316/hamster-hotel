<?php

// test
use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;

Route::get('test', function () {

    DB::table('owners')->truncate();
    DB::table('hamsters')->truncate();

    $data = [
        'Trevor 很帥'
    ];

//    $data = Owner::factory()
//        ->count(5)
//        ->has(Hamster::factory()->count(2))
//        ->hasHamsters(3, ['sex' => 99])
//        ->hasHamsters(3, function (array $attributes, Owner $owner){
//            return ['sex' => $owner->sex];
//        })
//        ->create();

//    $data = Hamster::factory()
//        ->count(2)
//        ->for(Owner::factory()->state([
//            'name' => 'Trevor Big Bird',
//        ]))
//        ->for(Owner::factory())
//        ->forOwner()
//        ->create();

    dump($data);

})->name('backend.test');
