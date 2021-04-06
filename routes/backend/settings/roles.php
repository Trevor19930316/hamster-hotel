<?php
// users
Route::group(['middleware' => ['permission:roles.view']], function () {

    Route::prefix('roles')->group(function () {

        Route::get('index', [\App\Http\Controllers\backend\RolesController::class, 'index'])
            ->name('backend.settings.roles.index');

        Route::get('show/{roles_id}', [\App\Http\Controllers\backend\RolesController::class, 'show'])
            ->name('backend.settings.roles.show');

        Route::get('create', [\App\Http\Controllers\backend\RolesController::class, 'create'])
            ->name('backend.settings.roles.create');

        Route::post('store', [\App\Http\Controllers\backend\RolesController::class, 'store'])
            ->name('backend.settings.roles.store');

        Route::get('edit/{roles_id}', [\App\Http\Controllers\backend\RolesController::class, 'edit'])
            ->name('backend.settings.roles.edit');

        Route::put('update/{roles_id}', [\App\Http\Controllers\backend\RolesController::class, 'update'])
            ->name('backend.settings.roles.update');

        Route::delete('destroy', [\App\Http\Controllers\backend\RolesController::class, 'destroy'])
            ->name('backend.settings.roles.destroy');

    });
});
