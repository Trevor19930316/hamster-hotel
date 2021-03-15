<?php

use App\Http\Controllers\backend\LoginController;

// 登入頁
Route::get('login', [LoginController::class, 'show'])->name('backend.login.show');
// 登入
Route::post('login', [LoginController::class, 'login'])->name('backend.login.login');
// 登出
Route::get('logout', [LoginController::class, 'logout'])->name('backend.login.logout');

// test
require 'test.php';

Route::middleware(['auth:web'])->group(function () {

    Route::group(['middleware' => ['get.menu']], function () {

        Route::get('dashboard', function () {

            return view('backend.dashboard');

        })->name('backend.dashboard');

        // components
        Route::prefix('components')->group(function () {

            // base
            require 'components/base.php';

            // element
            require 'components/element.php';

            // notifications
            require 'components/notifications.php';
        });

        // template
        Route::get('/template/homepage', function () {
            return view('template.homepage');
        });

    });

});
