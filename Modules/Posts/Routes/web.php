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


//Route::prefix('posts')->group(function() {
//    Route::get('/', 'PostController@index');
//});

use Illuminate\Support\Facades\Route;
use Modules\Posts\Http\Controllers\PostController;

Route::prefix('dashboard')
    ->middleware(['auth', 'permission.add'])
    ->group(function () {
        Route::resource('posts', PostController::class);
        Route::post('/upload', [PostController::class, 'uploadImage'])->name('ckeditor.upload');
        Route::post('/delete-image/{id}', [PostController::class, 'deleteImage'])->name('deleteImage');
        //slug
        Route::get('posts/check_slug/{title}', [PostController::class, 'checkSlug'])->name('posts.check_slug');
        //social media share link controller
        Route::get('/posts/{id}', [SocialShareController::class, 'share'])->name('share');
    });