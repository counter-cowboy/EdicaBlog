<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\IndexController as MainIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => ''], function () {
    Route::get('/', MainIndex::class)->name('index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
    });
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');



