<?php

use Illuminate\Support\Facades\Route;
use Modules\Video\Http\Controllers\VideoController;

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

// Route::prefix('video')->group(function() {
//     Route::get('/', 'VideoController@index');
// });

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('video', VideoController::class);
    });

// Route::prefix('backend')
//     ->middleware(['auth', 'permission.add', 'backend.permission'])
//     ->group(function () {
//         Route::get('video', [VideoController::class, 'index'])->name('video.index');
//         Route::get('video/create', [VideoController::class, 'create'])->name('video.create');
//         Route::post('video', [VideoController::class, 'store'])->name('video.store');
//         Route::get('video/{id}', [VideoController::class, 'edit'])->name('video.edit');
//         Route::get('video/{id}', [VideoController::class, 'show'])->name('video.show');
//         Route::put('video/{id}', [VideoController::class, 'update'])->name('video.update');
//         Route::delete('video/{id}', [VideoController::class, 'destroy'])->name('video.destroy');
//     });


// Route::prefix('backend')
// ->middleware(['auth', 'permission.add', 'backend.permission'])
// ->group(function () {
//     Route::resource('tag', TagController::class);
// });