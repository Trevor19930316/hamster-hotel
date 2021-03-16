<?php
// notifications
Route::prefix('notifications')->group(function () {

    Route::get('/alerts', function () {
        return view('backend.components.notifications.alerts');
    });

    Route::get('/badge', function () {
        return view('backend.components.notifications.badge');
    });

    Route::get('/modals', function () {
        return view('backend.components.notifications.modals');
    });

});
