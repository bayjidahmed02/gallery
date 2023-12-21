<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return redirect()->route('admin.index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Album Routes
    Route::resource('album', AlbumController::class);
    Route::resource('photo', PhotoController::class);
});
