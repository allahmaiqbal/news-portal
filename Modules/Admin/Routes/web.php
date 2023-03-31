<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\Admin\Http\Controllers\AdminController;

Route::prefix('backend')
    ->group(function() {
        Route::get('admin-login', [AdminController::class, 'login'])->name('admin-login');
        Route::post('admin-login', [AdminController::class, 'store']);
});

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::post('admin-logout', [AdminController::class, 'destroy'])
        ->name('admin-logout');
});
