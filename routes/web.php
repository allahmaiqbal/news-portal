<?php

use App\Http\Controllers\SocialShareController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'root']);
Route::get('/posts/{id}', [SocialShareController::class, 'share'])->name('share');
// Route::get('/share/{content}', 'ShareController@share')->name('share');