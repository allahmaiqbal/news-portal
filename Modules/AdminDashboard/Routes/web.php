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

// Route::prefix('admindashboard')->group(function() {
//     Route::get('/', 'AdminDashboardController@index');
// });

use Modules\AdminDashboard\Http\Controllers\AdminDashboardController;

Route::prefix('backend')
->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('admin-dashboard', AdminDashboardController::class);
    });
