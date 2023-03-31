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

// Route::prefix('tag')->group(function () {
//     Route::get('/', 'TagController@index');
// });

use Modules\Tag\Http\Controllers\TagController;

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('tag', TagController::class);
    });
