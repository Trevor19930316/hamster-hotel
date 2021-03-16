<?php

use App\Http\Controllers\api\ApiAuthController;
use App\Http\Resources\HamsterResource;
use App\Models\Hamster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('login', [ApiAuthController::class, 'login'])->name('api.api_auth.login');
    Route::get('/', [ApiAuthController::class, 'user'])->middleware('auth:api_users')->name('api.api_auth.user');
    Route::post('logout', [ApiAuthController::class, 'logout'])->middleware('auth:api_users')->name('api.api_auth.logout');
});
