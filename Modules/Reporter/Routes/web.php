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

// Route::prefix('reporter')->group(function() {
//     Route::get('/', 'ReporterController@index');
// });

use Modules\Reporter\Http\Controllers\ReporterController;

Route::prefix('dashboard')
    ->middleware(['auth', 'permission.add'])
    ->group(function () {
        Route::resource('reporters', ReporterController::class);
    });
