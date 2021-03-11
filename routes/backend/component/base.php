<?php
// base
Route::prefix('base')->group(function () {

    Route::get('/cards', function () {
        return view('backend.component.base.cards');
    });

    Route::get('/tables', function () {
        return view('backend.component.base.tables');
    });

});
