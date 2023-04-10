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

use Modules\PasswordChange\Http\Controllers\PasswordChangeController;

// Route::prefix('dashboard')
//     ->middleware('auth', 'permission.add')
//     ->group(function () {
//         // Change password
//         Route::prefix('change-password')
//             ->middleware('permission.remove')
//             ->controller(PasswordChangeController::class)
//             ->group(function () {
//                 // show change password form
//                 Route::get('/', 'showChangePasswordForm')->name('password.change');

//                 // update password
//                 Route::post('/', 'updatePassword');
//             });
//     });

    Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
                // Change password
                Route::prefix('change-password')
                    ->middleware('permission.remove')
                    ->controller(PasswordChangeController::class)
                    ->group(function () {
                        // show change password form
                        Route::get('/', 'showChangePasswordForm')->name('password.change');

                        // update password
                        Route::post('/', 'updatePassword');
                    });
    });