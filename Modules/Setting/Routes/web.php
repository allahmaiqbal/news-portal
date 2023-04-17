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

// Route::prefix('setting')->group(function() {
//     Route::get('/', 'SettingController@index');
// });
use Modules\Setting\Http\Controllers\SettingController;

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        //Advertise
        Route::get('add-advertise', [SettingController::class, 'addAdvertise'])->name('add-advertise.page');
        Route::post('add-advertise', [SettingController::class, 'addAdvertiseStore'])->name('add-advertise.store');
        //basic infomration
        Route::get('basic-info', [SettingController::class, 'basicInfo'])->name('basic-info.page');
        Route::post('basic-info', [SettingController::class, 'basicInfoStore'])->name('basic-info.store');

        //footer pages
        Route::get('footer', [SettingController::class, 'footerPage'])->name('footer.page');
        Route::post('footer', [SettingController::class, 'footerPageStore'])->name('footer.store');


    });