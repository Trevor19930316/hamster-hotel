<?php
// base
Route::prefix('base')->group(function () {

    Route::get('/cards', function () {
        return view('backend.components.base.cards');
    });

    Route::get('/tables', function () {
        return view('backend.components.base.tables');
    });

});
