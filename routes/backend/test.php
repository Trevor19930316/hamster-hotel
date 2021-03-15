<?php

// test
use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;
use Libraries\Helper\HelpImageUploader;

Route::get('test', function () {
    return view('backend.test');
})->name('backend.test');

Route::post('testPost', [\App\Http\Controllers\backend\TestController::class, 'testPost'])->name('backend.test.testPost');
