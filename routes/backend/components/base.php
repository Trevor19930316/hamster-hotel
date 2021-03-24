<?php
// base
Route::prefix('base')->group(function () {

    Route::get('/breadcrumb', function () {
        return view('backend.components.base.breadcrumb');
    });

    Route::get('/cards', function () {
        return view('backend.components.base.cards');
    });

    Route::get('/tables', function () {
        return view('backend.components.base.tables');
    });

    Route::get('/form', function () {
        return view('backend.components.base.form');
    });

    Route::get('/input-group', function () {
        return view('backend.components.base.input-group');
    });

});
