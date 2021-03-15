<?php

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

Route::middleware('auth:api')->group(function () {

//    Route::get('/user', function (Request $request) {
//        return $request->user();
//    });

});

// Hamster
//Route::apiResource('hamster', 'api\HamsterController');
Route::get('/hamster/{id}', function ($id){
    return new HamsterResource(Hamster::findOrFail($id));
});
