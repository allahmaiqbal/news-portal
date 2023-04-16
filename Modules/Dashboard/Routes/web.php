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
use Modules\Dashboard\Http\Controllers\FooterPageController;

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
     Route::get('category/{slug}',[DashboardController::class,'categoryPage']) ->name('category.pages') ;
     Route::get('news/{slug}',[DashboardController::class,'newsPage'])->name('news.pages');
     Route::get('breaking-news',[DashboardController::class,'breakingNews'])->name('breaking-news.pages');
     Route::get('view-news',[DashboardController::class,'viewNews'])->name('view-news.pages');
     Route::get('search',[DashboardController::class,'searchNews'])->name('search-news.pages');
     Route::get('live-tv',[DashboardController::class,'liveTv'])->name('live-tv.pages');
     //footer pages
     Route::get('about-us',[FooterPageController::class,'aboutUs'])->name('about-us.page');
     Route::get('contact-us',[FooterPageController::class,'contactUs'])->name('contact-us.page');
     Route::get('terms',[FooterPageController::class,'terms'])->name('terms.page');

    });
