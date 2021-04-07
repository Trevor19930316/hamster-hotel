<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

// 維護頁
Route::get('maintainPage', function (){
    return view('backend.global.maintainPage');
})->name('backend.global.maintainPage');

// 前台
require 'frontend/frontend.php';

// 後台
Route::prefix('backend')->group(function () {

    require 'backend/backend.php';

});


