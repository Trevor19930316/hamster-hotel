<?php
// element
Route::prefix('element')->group(function () {

    Route::get('/input', function () {
        return view('backend.components.element.input');
    });

    Route::get('/checkbox', function () {
        return view('backend.components.element.checkbox');
    });

    Route::get('/radio', function () {
        return view('backend.components.element.radio');
    });

    Route::get('/select', function () {
        return view('backend.components.element.select');
    });

    Route::get('/button', function () {
        return view('backend.components.element.button');
    });

    Route::get('/textarea', function () {
        return view('backend.components.element.textarea');
    });

    Route::get('/image', function () {
        return view('backend.components.element.image');
    });

    Route::get('/file', function () {
        return view('backend.components.element.file');
    });

    Route::get('/pagination', function () {
        return view('backend.components.element.pagination');
    });
});
