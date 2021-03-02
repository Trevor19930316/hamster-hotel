<?php
Route::prefix('contact_us')->group(function () {

    // 資料列表
    Route::get('/index', 'frontend\ControllerContactUs@index')
        ->name('frontend.contact_us.index');

});
