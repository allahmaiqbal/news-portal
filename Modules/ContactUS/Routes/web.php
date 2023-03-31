<?php

use Modules\ContactUS\Http\Controllers\ContactUSController;

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

// Route::prefix('contactus')->group(function() {
//     Route::get('/', 'ContactUSController@index');
// });


Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::post('/send-email', [ContactUSController::class, 'sendEmail'])->name('send-mail.page');
        Route::get('/email-list', [ContactUSController::class, 'emailList'])->name('email-list.page');
        Route::get('/email-show/{id}', [ContactUSController::class, 'emailShow'])->name('email-show.page');
        Route::delete('/email-destroy/{id}', [ContactUSController::class, 'emailDestroy'])->name('email-destroy.page');

        Route::get('/contact-page', [ContactUSController::class, 'contactPage'])->name('contact.page');
    });
