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

// Route::prefix('dashboard')
//     ->middleware(['auth', 'permission.add'])
//     ->group(function () {
//         Route::resource('users', \Modules\Users\Http\Controllers\UserController::class);
//     });

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('users', \Modules\Users\Http\Controllers\UserController::class);
    });