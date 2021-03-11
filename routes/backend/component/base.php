<?php
// base
Route::prefix('base')->group(function () {

    Route::get('/tables', function () {
        return view('backend.component.base.tables');
    });

});
