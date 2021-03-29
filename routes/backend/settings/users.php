<?php
// users
Route::group(['middleware' => ['permission:users.view']], function () {

    Route::prefix('users')->group(function () {

        Route::get('index', [\App\Http\Controllers\backend\UsersController::class, 'index']);

        Route::get('/create', function () {
            return view('backend.settings.users.create');
        });

        Route::post('/store', function () {
            return view('backend.settings.users.store');
        });

        Route::get('/edit/{users_id}', function () {
            return view('backend.settings.users.edit');
        });

        Route::put('/update/{users_id}', function () {
            return view('backend.settings.users.update');
        });

        Route::delete('/destroy', function () {
            return view('backend.settings.users.destroy');
        });

    });
});
