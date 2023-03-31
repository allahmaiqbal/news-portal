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

use Modules\Category\Http\Controllers\CategoryController;

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('category', CategoryController::class);
        Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
        Route::post('/category-trash', [CategoryController::class, 'restoreOrDelete'])->name('category.trash');
        Route::get('/category-restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::get('/ward-permanentDelete/{id}', [CategoryController::class, 'permanentDelete'])->name('category.permanentDelete');
    });

