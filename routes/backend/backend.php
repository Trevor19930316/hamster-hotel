<?php

use App\Http\Controllers\backend\LoginController;

// 登入頁
Route::get('loginPage', [LoginController::class, 'show'])->name('backend.loginPage');
// 登入
Route::post('login', [LoginController::class, 'login'])->name('backend.login');
// 登出
Route::get('logout', [LoginController::class, 'logout'])->name('backend.logout');

// http_status_code
require 'http_status_code/http_status_code.php';

// test
require 'test.php';

Route::middleware(['auth:web'])->group(function () {

    Route::group(['middleware' => ['get.menu']], function () {

        Route::get('dashboard', function () {

            return view('backend.dashboard');

        })->name('backend.dashboard');

        // settings
        Route::prefix('settings')->group(function () {
            // Users
            require 'settings/users.php';
            // Roles
            require 'settings/roles.php';
        });

        Route::group(['middleware' => ['role:Super-Admin']], function () {

            // components
            Route::prefix('components')->group(function () {
                // base
                require 'components/base.php';
                // element
                require 'components/element.php';
                // notifications
                require 'components/notifications.php';
            });
        });
    });
});
