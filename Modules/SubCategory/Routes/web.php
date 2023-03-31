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

// Route::prefix('subcategory')->group(function() {
//     Route::get('/', 'SubCategoryController@index');
// });

use Modules\SubCategory\Http\Controllers\SubCategoryController;

Route::prefix('backend')
    ->middleware(['auth', 'permission.add', 'backend.permission'])
    ->group(function () {
        Route::resource('sub-category', SubCategoryController::class);
        Route::get('/sub-category-trash', [SubCategoryController::class, 'trash'])->name('subcategory.trash');
        Route::post('/sub-category-trash', [SubCategoryController::class, 'restoreOrDelete'])->name('subcategory.trash');
        Route::get('/sub-category-restore/{id}', [SubCategoryController::class, 'restore'])->name('subcategory.restore');
        Route::get('/sub-category-permanentDelete/{id}', [SubCategoryController::class, 'permanentDelete'])->name('subcategory.permanentDelete');


    // Route::prefix('axios')->group(function () {
    //         // category to subCategory
    //         Route::get('dashboard/subcategories/{categoryId}', [SubCategoryController::class, 'getSubcategories']);

    //         });

        // axios route
    Route::prefix('axios')->group(function () {
        // category to subCategory
        Route::post('/getSubcategoriesById', [SubCategoryController::class, 'getSubcategoriesById']);

    });

    });



