<?php

// test
use App\Models\Hamster;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;
use Libraries\Helper\HelpImageUploader;

Route::get('test', function () {

    $HelpImageUploader = new HelpImageUploader();
    $HelpImageUploader->setStorageDisk('public');

})->name('backend.test');
