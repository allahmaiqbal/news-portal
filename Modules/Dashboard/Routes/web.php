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

use Modules\Dashboard\Http\Controllers\DashboardController;


// dashboard
// Route::get('dashboard', [DashboardController::class, 'index'])
//     ->name('dashboard')
//     ->middleware(['auth', 'permission.remove']); // remove permission to access dashboard
// Route::get('dashboard/pages/{id}',[DashboardController::class,'page'])
//     ->name('pages')
//     ->middleware(['auth', 'permission.remove']);

    Route::prefix('')
    ->group(function () {
     Route::get('', [DashboardController::class, 'index'])->name('dashboard'); // remove permission to access dashboard
     Route::get('/category/{id}',[DashboardController::class,'categoryPage']) ->name('category.pages') ;
     Route::get('news/{slug}',[DashboardController::class,'newsPage'])->name('news.pages');
    });
