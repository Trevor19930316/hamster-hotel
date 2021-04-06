<?php
// base
Route::prefix('http_status_code')->group(function () {

    Route::get('/403', function () {
        return view('backend.http_status_code.403');
    });

    Route::get('/404', function () {
        return view('backend.http_status_code.404');
    });

    Route::get('/419', function () {
        return view('backend.http_status_code.404');
    });

    Route::get('/422', function () {
        return view('backend.http_status_code.404');
    });

    Route::get('/500', function () {
        return view('backend.http_status_code.404');
    });
});
