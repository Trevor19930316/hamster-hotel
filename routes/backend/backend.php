<?php

// 登入頁
Route::get('login', 'backend\LoginController@show')->name('backend.login.show');
// 登入
Route::post('login', 'backend\LoginController@login')->name('backend.login.login');
// 登出
Route::get('logout', 'backend\LoginController@logout')->name('backend.login.logout');

Route::middleware(['auth:users'])->group(function () {

    return 'Hello';

});

// test
require 'test.php';
