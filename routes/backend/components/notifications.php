<?php
// notifications
Route::prefix('notifications')->group(function () {

    Route::get('/alerts', function () {
        return view('backend.components.notifications.alerts');
    });

    Route::get('/badges', function () {
        return view('backend.components.notifications.badges');
    });

    Route::get('/modals', function () {
        return view('backend.components.notifications.modals');
    });

});
