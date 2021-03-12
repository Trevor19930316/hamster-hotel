<?php

// test
use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;

Route::get('test', function () {

    $path = app_path('Helper\Validator');

    dd($path);

})->name('backend.test');
