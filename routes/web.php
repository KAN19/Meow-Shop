<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Media\MediaController;
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

Route::get('/', function () {
    return view('client.home.index');
});

Route::prefix('admin')->group(function() {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });

    Route::prefix('category')->group(function() {
        Route::get('', [CategoryController::class, 'showCategory'])->name('show-category');

        Route::get('create', [CategoryController::class, 'showCreateCategory'])->name('create-category');
        Route::post('create', [CategoryController::class, 'storeCategory']);

        Route::get('edit/{slug}', [CategoryController::class, 'showEditCategory'])->name('edit-category');
        Route::put('edit/{slug}', [CategoryController::class, 'updateCategory']); 

        Route::get('delete/{slug}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    });

    Route::prefix('media')->group(function() {
        Route::get('', [MediaController::class, 'index'])->name('media-index');

        // Route::get('create', [CategoryController::class, 'showCreateCategory'])->name('create-category');
        // Route::post('create', [CategoryController::class, 'storeCategory']);

        // Route::get('edit/{id}', [CategoryController::class, 'showEditCategory'])->name('edit-category');
        // Route::put('edit/{id}', [CategoryController::class, 'updateCategory']); 

        // Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    });
});